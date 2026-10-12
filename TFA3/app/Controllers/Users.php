<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $data = [
            'title' => 'User Accounts',
            'users' => $userModel->findAll(),
        ];

        return view('partials/header', $data)
            . view('users', $data)
            . view('partials/footer');
    }

    public function newUser()
    {
        $data = [
            'title' => 'Add User',
        ];

        return view('partials/header', $data)
            . view('user_form', $data)
            . view('partials/footer');
    }

    public function create()
    {
        $postData = $this->request->getPost();

        $rules = [
            'username'  => 'required|max_length[50]|is_unique[users.username]',
            'full_name' => 'required|max_length[100]',
        ];

        $messages = [
            'username' => [
                'required'   => 'Please enter a username.',
                'max_length' => 'The username must not exceed 50 characters.',
                'is_unique'  => 'That username is already taken. Please choose another.',
            ],
            'full_name' => [
                'required'   => 'Please enter the user’s full name.',
                'max_length' => 'The full name must not exceed 100 characters.',
            ],
        ];

        if (! $this->validateData($postData, $rules, $messages)) {
            return redirect()->back()->withInput();
        }

        $userModel = new UserModel();

        $userModel->insert([
            'username'   => $postData['username'],
            'full_name'  => $postData['full_name'],
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/users');
    }

    public function edit($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);

        $data = [
            'title' => 'Edit User',
            'user'  => $user,
        ];

        return view('partials/header', $data)
            . view('user_edit', $data)
            . view('partials/footer');
    }

    public function update($id)
    {
        $userModel = new UserModel();
        $user = $userModel->find($id);
        $postData = $this->request->getPost();

        $rules = [
            'username'  => "required|max_length[50]|is_unique[users.username,id,{$id}]",
            'full_name' => 'required|max_length[100]',
        ];

        $messages = [
            'username' => [
                'required'   => 'Please enter a username.',
                'max_length' => 'The username must not exceed 50 characters.',
                'is_unique'  => 'That username is already taken. Please choose another.',
            ],
            'full_name' => [
                'required'   => 'Please enter the user’s full name.',
                'max_length' => 'The full name must not exceed 100 characters.',
            ],
        ];

        if (! $this->validateData($postData, $rules, $messages)) {
            return redirect()->back()->withInput();
        }

        $file = $this->request->getFile('avatar');
        $newAvatarName = null;

        // Validate the avatar only when a file was selected.
        if ($file !== null && $file->getError() !== UPLOAD_ERR_NO_FILE) {
            $avatarRules = [
                'avatar' => [
                    'rules' => [
                        'uploaded[avatar]',
                        'max_size[avatar,2048]',
                        'mime_in[avatar,image/jpeg,image/png]',
                    ],
                ],
            ];

            $avatarMessages = [
                'avatar' => [
                    'uploaded' => 'Please choose a valid avatar image.',
                    'max_size' => 'The avatar must not be larger than 2 MB.',
                    'mime_in'  => 'The avatar must be a JPG or PNG image.',
                ],
            ];

            if (! $this->validateData([], $avatarRules, $avatarMessages)) {
                return redirect()->back()->withInput();
            }

            $uploadPath = FCPATH . 'uploads';

            if (! is_dir($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }

            $newAvatarName = $file->getRandomName();
            $file->move($uploadPath, $newAvatarName);

            $image = service('image');
            $image->withFile($uploadPath . '/' . $newAvatarName)
                ->fit(300, 300, 'center')
                ->save($uploadPath . '/' . $newAvatarName);
        }

        $updateData = [
            'username'  => $postData['username'],
            'full_name' => $postData['full_name'],
        ];

        if ($newAvatarName !== null) {
            $updateData['avatar'] = $newAvatarName;
        }

        $userModel->update($id, $updateData);

        return redirect()->to('/users');
    }
}
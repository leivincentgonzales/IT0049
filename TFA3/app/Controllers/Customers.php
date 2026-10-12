<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use CodeIgniter\Exceptions\PageNotFoundException;

class Customers extends BaseController
{
    public function index()
    {
        $customerModel = new CustomerModel();

        $data = [
            'title'     => 'Customer Accounts',
            'customers' => $customerModel->findAll(),
        ];

        return view('partials/header', $data)
            . view('customers', $data)
            . view('partials/footer');
    }

    public function newCustomer()
    {
        $data = [
            'title' => 'Add Customer',
        ];

        return view('partials/header', $data)
            . view('customer_form', $data)
            . view('partials/footer');
    }

    public function create()
    {
        $postData = $this->request->getPost();

        $rules = [
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|numeric|exact_length[11]',
        ];

        $messages = [
            'full_name' => [
                'required'   => 'Please enter the customer name.',
                'max_length' => 'The customer name must not exceed 100 characters.',
            ],
            'email' => [
                'required'    => 'Please enter the customer email.',
                'valid_email' => 'Please enter a valid email address.',
                'max_length'  => 'The email must not exceed 100 characters.',
            ],
            'phone' => [
                'numeric'      => 'Phone number must contain numbers only.',
                'exact_length' => 'Phone number must be exactly 11 digits.',
            ],
        ];

        if (! $this->validateData($postData, $rules, $messages)) {
            return redirect()->back()->withInput();
        }

        $customerModel = new CustomerModel();

        $customerModel->insert([
            'full_name'  => $postData['full_name'],
            'email'      => $postData['email'],
            'phone'      => $postData['phone'] ?: null,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        return redirect()->to('/customers');
    }

    public function edit($id)
    {
        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);

        if ($customer === null) {
            throw PageNotFoundException::forPageNotFound('Customer not found.');
        }

        $data = [
            'title'    => 'Edit Customer',
            'customer' => $customer,
        ];

        return view('partials/header', $data)
            . view('customer_edit', $data)
            . view('partials/footer');
    }

    public function update($id)
    {
        $customerModel = new CustomerModel();
        $customer = $customerModel->find($id);

        if ($customer === null) {
            throw PageNotFoundException::forPageNotFound('Customer not found.');
        }

        $postData = $this->request->getPost();

        $rules = [
            'full_name' => 'required|max_length[100]',
            'email'     => 'required|valid_email|max_length[100]',
            'phone'     => 'permit_empty|numeric|exact_length[11]',
        ];

        $messages = [
            'full_name' => [
                'required'   => 'Please enter the customer name.',
                'max_length' => 'The customer name must not exceed 100 characters.',
            ],
            'email' => [
                'required'    => 'Please enter the customer email.',
                'valid_email' => 'Please enter a valid email address.',
                'max_length'  => 'The email must not exceed 100 characters.',
            ],
            'phone' => [
                'numeric'      => 'Phone number must contain numbers only.',
                'exact_length' => 'Phone number must be exactly 11 digits.',
            ],
        ];

        if (! $this->validateData($postData, $rules, $messages)) {
            return redirect()->back()->withInput();
        }

        $customerModel->update($id, [
            'full_name' => $postData['full_name'],
            'email'     => $postData['email'],
            'phone'     => $postData['phone'] ?: null,
        ]);

        return redirect()->to('/customers');
    }
}
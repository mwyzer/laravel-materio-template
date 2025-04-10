<?php

namespace App\Http\Controllers\Tables;

use App\Http\Controllers\Controller;

class Basic extends Controller
{
    public function index()
    {
        $projects = [
            [
                'icon' => 'ri-suitcase-2-line',
                'icon_color' => 'text-danger',
                'name' => 'Tours Project',
                'client' => 'Albert Cook',
                'status' => 'Active',
                'status_color' => 'primary',
            ],
            [
                'icon' => 'ri-basketball-fill',
                'icon_color' => 'text-info',
                'name' => 'Sports Project',
                'client' => 'Barry Hunter',
                'status' => 'Completed',
                'status_color' => 'success',
            ],
            [
                'icon' => 'ri-leaf-fill',
                'icon_color' => 'text-success',
                'name' => 'Greenhouse Project',
                'client' => 'Trevor Baker',
                'status' => 'Scheduled',
                'status_color' => 'info',
            ],
            [
                'icon' => 'ri-bank-fill',
                'icon_color' => 'text-primary',
                'name' => 'Bank Project',
                'client' => 'Jerry Milton',
                'status' => 'In Progress',
                'status_color' => 'warning',
            ],
        ];

        return view('content.tables.tables-basic', compact('projects'));
    }
}

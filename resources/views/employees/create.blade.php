@extends('layouts.app')

@section('content')
<div class="bg-white p-6 rounded shadow max-w-xl mx-auto">
    <h2 class="text-xl font-semibold mb-4">Edit Employee</h2>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-4">
            <label class="block text-gray-700">Name</label>
            <input type="text" name="name" value="{{ $employee->name }}" class="w-full border rounded px-3 py-2" required>
        </div>

        <div class="mb-4">
            <label class="block text-gray-700">Company</label>
            <select name="company_id" class="w-full border rounded px-3 py-2" required>
                @foreach($companies as $company)
                    <option value="{{ $company->id }}" @if($company->id == $employee->company_id) selected @endif>
                        {{ $company->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mt-4">
            <label class="block text-gray-700">Skills</label>
            <div class="relative">
                <div class="mt-1 w-full">
                    <div class="border border-gray-300 rounded-md p-2 cursor-pointer" onclick="toggleSkillsDropdown()">
                        <div id="skills-display" class="te

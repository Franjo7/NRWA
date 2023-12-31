<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Northwind</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="{{ url('/') }}">Početna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('region.index') }}">Region</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('territory.index') }}">Territories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('shipper.index') }}">Shippers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('order.index') }}">Orders</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customerdemographic.index') }}">Customers Demographic</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customers.index') }}">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('category.index') }}">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('suppliers.index') }}">Suppliers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orderDetails.index') }}">Order Details</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('employee.index') }}">Employees</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customer_customer_demos.index') }}">Customer Customer Demo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('employee_territories.index') }}">Employee Territories</a>
            </li>
    </div>
</nav>
<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Employees List</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-primary" href="{{ route('employee.create') }}">Add new Employee</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
        <tr>
<th width="80px">EmployeeID</th>
<th width="230px">LastName</th>
<th width="230px">FirstName</th>
<th width="230px">Title</th>
<th width="230px">TitleOfCourtesy</th>
<th width="230px">BirthDate</th>
<th width="230px">HireDate</th>
<th width="230px">Address</th>
<th width="230px">City</th>
<th width="230px">Region</th>
<th width="230px">PostalCode</th>
<th width="230px">Country</th>
<th width="230px">HomePhone</th>
<th width="230px">Extension</th>
<th width="230px">Photo</th>
<th width="230px">Notes</th>
<th width="230px">ReportsTo</th>
<th width="230px">PhotoPath</th>
            <th width="230px">Salary</th>
            <th width="230px">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($employees as $employee)
            <tr>
                <td>{{ $employee->EmployeeID }}</td>
<td>{{ $employee->LastName }}</td>
<td>{{ $employee->FirstName }}</td>
<td>{{ $employee->Title }}</td>
<td>{{ $employee->TitleOfCourtesy }}</td>
<td>{{ $employee->BirthDate }}</td>
<td>{{ $employee->HireDate }}</td>
<td>{{ $employee->Address }}</td>
<td>{{ $employee->City }}</td>
<td>{{ $employee->Region }}</td>
<td>{{ $employee->PostalCode }}</td>
<td>{{ $employee->Country }}</td>
<td>{{ $employee->HomePhone }}</td>
<td>{{ $employee->Extension }}</td>
<td>{{ $employee->Photo }}</td>
<td>{{ $employee->Notes }}</td>
<td>{{ $employee->ReportsTo }}</td>
<td>{{ $employee->PhotoPath }}</td>
                <td>{{ $employee->Salary }}</td>
                <td>
                    <form action="{{ route('employee.destroy',$employee->EmployeeID) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('employee.edit',$employee->EmployeeID) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</body>
</html>

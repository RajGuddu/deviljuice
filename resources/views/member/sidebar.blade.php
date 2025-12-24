<div class="d-flex flex-column mt-4 p-3 text-white bg-black min-vh-100">

    <h5 class="mb-3">Welcome, Raj Guddu</h5>
    <small class="mb-4">1234567890</small>

    <nav class="nav flex-column member-sidebar">
        <a href="{{ url('member-dashboard') }}" class="nav-link text-light  mb-1 ">Dashboard</a>
        <a href="{{ url('member-orders') }}" class="nav-link text-light  mb-1 m-active">My Orders</a>
        <a href="{{ url('member-courses') }}" class="nav-link text-light  mb-1">My Courses</a>
        <a href="{{ url('member-addresses') }}" class="nav-link text-light  mb-1">My Addresses</a>
        <a href="{{ url('member-profile') }}" class="nav-link text-light  mb-1">Profile</a>
        <a href="{{ url('member-changepassword') }}" class="nav-link text-light  mb-4">Change Password</a>
        <a href="{{ url('member-logout') }}" class="nav-link text-light  mb-4" onclick="return confirm('Are you sure?')">Logout</a>
    </nav>
</div>

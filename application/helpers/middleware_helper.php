<?php
function middleware_login()
{
    // check session
    if (isset($_SESSION['role'])) {
        // if exists session
        // if admin
        if ($_SESSION['role'] == 1) {
            return redirect('/admin/dashboard');
        }
        return redirect('/mhs');
    }
}

function middleware_admin()
{
    // if admin
    if (!isset($_SESSION['role']) || $_SESSION['role'] != 1) {
        return redirect('login');
    }
}

function middleware_mhs()
{
    // if admin
    if (!isset($_SESSION['role']) || $_SESSION['role'] != 0) {
        return redirect('login');
    }
}

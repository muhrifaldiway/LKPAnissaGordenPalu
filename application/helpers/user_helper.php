<?php

function is_login_in()
{
    $ci = get_instance();
    if (!$ci->session->userdata('email')) {
        redirect('Login');
    } else {
        $role_id = $ci->session->userdata('role_id');


        $queryAccess = $ci->db->get_where('user_access', [
            'role_id' => $role_id,
        ]);

        if ($queryAccess->num_rows() < 1) {
            redirect('Login');
        }
    }
}

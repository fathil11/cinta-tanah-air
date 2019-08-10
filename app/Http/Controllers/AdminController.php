<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AdminController extends Controller
{
    public function showWelcome()
    {
        return view('admin.welcome');
    }

    public function showStatistic()
    {
        return view('admin.statistik');
    }

    public function showBuatArtikel()
    {
        return view('admin.buatArtikel');
    }

    public function showKelolaArtikel()
    {
        return view('admin.kelolaArtikel');
    }

    public function showDraftArtikel()
    {
        return view('admin.draftArtikel');
    }

    public function showKelolaUser()
    {
        $users = User::all();
        return view('admin.kelolaUser', ['users' => $users]);
    }

    public function showEditUser($id)
    {
        $user = User::find($id);
        return view('admin.editUser', ['user' => $user]);
    }

    public function editUser(Request $request, $id)
    {
        $req_email = User::where('email', $request->email)->first()->email;
        $cur_email = User::find($id)->email;

        // Cek Email diganti atau tidak
        if ($req_email != $cur_email) {
            $check_email = User::where('email', $request->email)->first();
            if ($check_email) {
                $request->session()->flash('status', 'Email sudah pernah terdaftar');
                return redirect(url('admin/edit-user') . '/' . $id);
            } else {
                if (strlen($request->password) < 8 && strlen($request->password) > 0) {
                    $request->session()->flash('status', 'Password minimal memiliki 8 karakter');
                    return redirect(url('admin/edit-user') . '/' . $id);
                } else {
                    if ($request->password != $request->password_confirmation) {
                        $request->session()->flash('status', 'Pengulangan password tidak sesuai');
                        return redirect(url('admin/edit-user') . '/' . $id);
                    } else {

                        $user = User::find($id);
                        $user->name = $request->name;
                        $user->email = $request->email;

                        if (strlen($request->password) == 0) {
                            $user->password = $user->password;
                        } else {
                            $user->password = bcrypt($request->password);
                        }

                        $user->moto = $request->moto;

                        if ($request->role == 'admin') {
                            $user->role = 1;
                        } elseif ($request->role == 'author') {
                            $user->role = 2;
                        }

                        if ($user->save()) {
                            $request->session()->flash('status', 'Berhasil mengedit user');
                            return redirect(url('admin/kelola-user'));
                        }
                    }
                }
            }
        } else {
            if (strlen($request->password) < 8 && strlen($request->password) > 0) {
                $request->session()->flash('status', 'Password minimal memiliki 8 karakter');
                return redirect(url('admin/edit-user') . '/' . $id);
            } else {
                if ($request->password != $request->password_confirmation) {
                    $request->session()->flash('status', 'Pengulangan password tidak sesuai');
                    return redirect(url('admin/edit-user') . '/' . $id);
                } else {

                    $user = User::find($id);
                    $user->name = $request->name;

                    if (strlen($request->password) == 0) {
                        $user->password = $user->password;
                    } else {
                        $user->password = bcrypt($request->password);
                    }

                    $user->moto = $request->moto;

                    if ($request->role == 'admin') {
                        $user->role = 1;
                    } elseif ($request->role == 'author') {
                        $user->role = 2;
                    }

                    if ($user->save()) {
                        $request->session()->flash('status', 'Berhasil mengedit user');
                        return redirect(url('admin/kelola-user'));
                    }
                }
            }
        }
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        if ($user->delete()) {
            return redirect(url('admin/kelola-user'));
        }
    }

    public function showBuatUser()
    {
        return view('admin.buatUser');
    }

    public function buatUser(Request $request)
    {
        $check_email = User::where('email', $request->email)->first();
        // Check Email Exist
        if ($check_email) {
            $request->session()->flash('status', 'Email sudah pernah terdaftar');
            return redirect(url('admin/buat-user'));
        } else {
            if (strlen($request->password) < 8) {
                $request->session()->flash('status', 'Password minimal memiliki 8 karakter');
                return redirect(url('admin/buat-user'));
            } else {
                if ($request->password != $request->password_confirmation) {
                    $request->session()->flash('status', 'Pengulangan password tidak sesuai');
                    return redirect(url('admin/buat-user'));
                } else {
                    $user = new User();
                    $user->name = $request->name;
                    $user->email = $request->email;
                    $user->password = bcrypt($request->password);
                    $user->moto = $request->moto;
                    if ($request->role == 'admin') {
                        $user->role = 1;
                    } elseif ($request->role == 'author') {
                        $user->role = 2;
                    }
                    if ($user->save()) {
                        $request->session()->flash('status', 'Berhasil mendaftarkan user');
                        return redirect(url('admin/kelola-user'));
                    }
                }
            }
        }
    }
}

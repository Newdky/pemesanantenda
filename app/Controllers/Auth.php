namespace App\Controllers;

use App\Models\User; // Asumsikan Anda memiliki model User

class AuthController extends BaseController
{
    public function login()
    {
        // Validasi input pengguna
        $rules = [
            'email'     => 'required|valid_email',
            'password'  => 'required|min_length[8]',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil data dari form
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        // Cari pengguna berdasarkan email
        $user = $this->userModel->where('email', $email)->first();

        // Verifikasi password
        if (!$user || !password_verify($password, $user->password)) {
            return redirect()->back()->with('error', 'Email atau password salah');
        }

        // Jika berhasil login, simpan data pengguna dalam session
        session()->set('isLoggedIn', true);
        session()->set('userId', $user->id);

        return redirect()->to('/dashboard'); // Ganti dengan URL dashboard Anda
    }
}
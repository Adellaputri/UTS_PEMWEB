<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SupirStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama_supir' => 'required',
            'harga_sewa' => 'required',
            'gambar' => 'required|image',
            'usia' => 'required',
            'kinerja_supir' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'sehat' => 'required',
            'profesional' => 'required',
            'driver_lisensi_lengkap' => 'required',
            'berpengalaman' => 'required'
            
        ];
    }
}

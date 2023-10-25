<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFilmRequest extends FormRequest
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
            'judul'=>'required|string',
            'minimal_usia'=> 'required|integer|gt:0',
            'kategori' => 'required|string',
            'durasi'=> 'required|string',
            'tayang' => 'required|after_or_equal:today',
            'sinopsis' => 'required|string|max:1000',
            'thumbnile' => 'image',
            'vidio' => 'video|mimes:png,jpg'
        ];
    }
    public function messages(): array
    {
        return [
            'judul.required' => 'Judul wajid diisi',
            'minimal_usia.required' => 'Minimal usia wajib diisi',
            'minimal_usia.gt:0' => 'Minimal usia tidak boleh minus',
            'kategori.required' => 'Kategori wajib diisi',
            'tayang.required' => 'Tanggal wajib diisi',
            'sinopsis.required' => 'Sinopsis wajib diisi',
            'sinopsis.max:1000' => 'Sinopsis maksimal 1000 karakter',
            'tayang.after_or_equal' => 'Jadwal film tidak boleh kemarin'
        ];
    }
}

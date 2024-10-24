<?php

namespace App\Http\Requests\Admin\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'content' => 'required|string',
            'preview_image' => 'required|mimes:jpeg,png,jpg',
            'main_image' => 'required||mimes:jpeg,png,jpg',
            'category_id' => 'required|integer|exists:categories,id',
            'tag_ids' => 'nullable|array',
            'tag_ids.*' => 'nullable|integer|exists:tags,id',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Это поле должно быть заполнено',
            'title.string' => 'Это поле должно быть строковым значением',
            'content.required' => 'Это поле должно быть заполнено',
            'content.string' => 'Это поле должно быть строковым значением',
            'preview_image.required' => 'Это поле должно быть заполнено',
            'preview_image.mimes' => 'Необходимо выбрать изображение (jpeg,png,jpg)',
            'main_image.required' => 'Это поле должно быть заполнено',
            'main_image.mimes' => 'Необходимо выбрать изображение (jpeg,png,jpg)   ',
            'category_id.required' => 'Это поле должно быть заполнено',
            'category_id.integer' => 'Id категории должно быть целым числовым значением',
            'category_id.exists' => 'Id категории должно быть в базе',
            'tag_ids.array' => 'Необходимо отправить массив данных',
        ];
    }
}

<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProjectRequest extends FormRequest
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
            'title' => ['required', 'min:3', 'max:200', Rule::unique('projects')->ignore($this->project)],
            'body' => ['nullable'],
            'image' => ['nullable', 'image'],
            'url' => ['nullable', 'url'],
            'category_id' => ['nullable', 'exists:categories,id'],
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'The title field is required.',
            'title.min' => 'The title must be at least :min characters.',
            'title.max' => 'The title must not be greater than :max characters.',
            'title.unique' => 'The title is already used.',
            'image.url' => 'The image must be a valid URL.',
            'url.url' => 'The url must be a valid URL.',
        ];
    }
}

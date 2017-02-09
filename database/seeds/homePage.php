<?php

use Illuminate\Database\Seeder;

class homePage extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('static_pages')->insert(
            [
                [
                    'type' => 'home',
                    'input' => 'text',
                    'code' => 'slogan',
                    'content' => 'Ваши деньги, наши чертежи',
                ],
                [
                    'type' => 'home',
                    'input' => 'text',
                    'code' => 'title',
                    'content' => 'Бюро Технической Инвентаризации',
                ],
                [
                    'type' => 'home',
                    'input' => 'text',
                    'code' => 'sub_title',
                    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. More Lorem Ipsum added here too.',
                ],
                [
                    'type' => 'home',
                    'input' => 'file',
                    'code' => 'image',
                    'content' => 'image',
                ],
                [
                    'type' => 'home',
                    'input' => 'text',
                    'code' => 'sub_title_left',
                    'content' => 'Качественно',
                ],
                [
                    'type' => 'home',
                    'input' => 'text',
                    'code' => 'sub_title_center',
                    'content' => 'Бустро',
                ],
                [
                    'type' => 'home',
                    'input' => 'text',
                    'code' => 'sub_title_right',
                    'content' => 'Надежно',
                ],
                [
                    'type' => 'home',
                    'input' => 'textarea',
                    'code' => 'sub_description_left',
                    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                ],
                [
                    'type' => 'home',
                    'input' => 'textarea',
                    'code' => 'sub_description_center',
                    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                ],
                [
                    'type' => 'home',
                    'input' => 'textarea',
                    'code' => 'sub_description_right',
                    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                ],
                [
                    'type' => 'home',
                    'input' => 'textarea',
                    'code' => 'sub_slogan',
                    'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.',
                ],
                [
                    'type' => 'home',
                    'input' => 'text',
                    'code' => 'sub_slogan_author',
                    'content' => 'Marcel Newman',
                ]
            ]
        );
    }
}

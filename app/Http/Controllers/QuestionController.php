<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use Illuminate\Support\Facades\Http;

class QuestionController extends Controller
{
    public function fetch()
    {
        $response = Http::get('https://quizapi.io/api/v1/questions', [
            'apiKey' => 'tDRuA1LnR0pIe6T0kz2BFMs2X5Y7SZR67rQJ0ZOg',
            'limit' => 3,
        ]);

        $quizzes = json_decode($response->body());

        foreach($quizzes as $quiz){
            $question = new Question;
            $question->question = $quiz->question;
            $question->answer_a = $quiz->answers->answer_a;
            $question->answer_b = $quiz->answers->answer_b;
            $question->answer_c = $quiz->answers->answer_c;
            $question->answer_d = $quiz->answers->answer_d;
            $question->save();
        }
        //return dd($quizzes->all());
        //return ($response->body());
        //ddd('dumping this one', $response->body());
        var_dump($response->body());
        return "DONE";
    }
}

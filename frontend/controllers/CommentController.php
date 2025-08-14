<?php
namespace frontend\controllers;

use yii\rest\ActiveController;
use frontend\resource\Comment;


class CommentController extends ActiveController
{
    public $modelClass = Comment::class;
}
<?php
namespace App\Controllers;
use App\Models\Post;
use Database\DBConnection;

use function Database\getPDO;

class BlogController extends Controller
{

        public function welcom(){
        return $this->view('Blog.welcom');
        }

    public function index()
    {
        $post= new Post($this->getDB());
        $posts=$post->all();
        
        

        
        return $this->view('Blog.index', compact('posts'));
    }

    public function formulaire()
    {
        $post= new Post($this->getDB());
        $posts=$post->all();
        
        

        
        return $this->view('Blog.formulaire', compact('posts'));
    }

    public function delete()
    {
        $post= new Post($this->getDB());
        $posts=$post->all();
        
        

        
        return $this->view('Blog.delete', compact('posts'));
    }
    public function edit()
    {
        $post= new Post($this->getDB());
        $posts=$post->all();
        
        

        
        return $this->view('Blog.edit', compact('posts'));
    }

    public function admin()
    {
        $post= new Post($this->getDB());
        $posts=$post->all();
        
        

        
        return $this->view('Blog.admin', compact('posts'));
    }

    public function traitement(){
        $post = new Post($this->getDB());
        $post =$post->all( );
       
        $posts_id = $_POST["posts_id"];
         $libele = $_POST["libele"];
         $sql="INSERT INTO categories(posts_id, libele) VALUES (?, ?)";
         
         return $this->view('Blog.traitement', compact('post'));
    }
    public function show(int $id)
    {
        $post = new Post($this->getDB());
        $post =$post->findById($id);
       

         return $this->view('Blog.show', compact('post'));
    }
    
}
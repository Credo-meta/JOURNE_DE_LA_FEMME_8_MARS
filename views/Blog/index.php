<h1>Oh la femme</h1>
<?php foreach ($params['posts'] as $post) : ?> 
    <div class="card mb-3">
            <div class="card-body">
                <h2><?= $post->title  ?></h2>
                <small><?= $post->cretead_at  ?></small>
                <p><?= $post->content  ?></p>
                <a href="/posts/<?= $post->id  ?>" class="btn btn-primary">Lire la suite </a>
               
            </div>

    </div>

    

<?php endforeach ?>



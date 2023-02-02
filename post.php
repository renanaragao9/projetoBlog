<?php
    include_once("templates/header.php");

     if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {
            if($post['id'] == $postId) {
                $currentPost = $post;
            }
        }
     }
?>
    
    <main id="post-container">
        <div class="content-container">
            <h1 id="main title"><?= $currentPost['title'] ?></h1>
            <p id="post-description"><?= $currentPost['description'] ?></p>
            <div class="img-container">
                <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
            </div>
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa excepturi blanditiis voluptatem voluptas architecto voluptate, doloribus sit alias fugiat ducimus? Eos sapiente nihil quibusdam vel magni ratione dolor illum.
            Consequuntur non nobis quibusdam unde ex, repudiandae eaque amet dolorem, optio est tenetur nihil voluptate error maxime facilis! Nemo eligendi culpa magni consectetur veniam totam mollitia perspiciatis libero ipsum maxime.
            Ad odit veniam explicabo, totam iste accusantium quam ipsa beatae quas quidem error perspiciatis non ducimus cum ex? Porro nisi dolores est deleniti error voluptas explicabo possimus odit et voluptate!
            Exercitationem tenetur repellat ut vel? Earum, perspiciatis repudiandae sit dolores blanditiis sequi, ipsam facere expedita ex placeat amet, sint dolor aperiam a eum quaerat officia adipisci odio molestiae sunt officiis.
            Voluptatum doloribus consectetur sint necessitatibus esse eligendi hic quis aut saepe praesentium iusto perspiciatis aspernatur veniam quibusdam, delectus at recusandae quasi ipsam quo, ipsum obcaecati possimus cumque ratione nesciunt? Blanditiis.
            </p>
            
            <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui ipsa excepturi blanditiis voluptatem voluptas architecto voluptate, doloribus sit alias fugiat ducimus? Eos sapiente nihil quibusdam vel magni ratione dolor illum.
            Consequuntur non nobis quibusdam unde ex, repudiandae eaque amet dolorem, optio est tenetur nihil voluptate error maxime facilis! Nemo eligendi culpa magni consectetur veniam totam mollitia perspiciatis libero ipsum maxime.
            Ad odit veniam explicabo, totam iste accusantium quam ipsa beatae quas quidem error perspiciatis non ducimus cum ex? Porro nisi dolores est deleniti error voluptas explicabo possimus odit et voluptate!
            Exercitationem tenetur repellat ut vel? Earum, perspiciatis repudiandae sit dolores blanditiis sequi, ipsam facere expedita ex placeat amet, sint dolor aperiam a eum quaerat officia adipisci odio molestiae sunt officiis.
            Voluptatum doloribus consectetur sint necessitatibus esse eligendi hic quis aut saepe praesentium iusto perspiciatis aspernatur veniam quibusdam, delectus at recusandae quasi ipsam quo, ipsum obcaecati possimus cumque ratione nesciunt? Blanditiis.
            </p>
        </div>
    </main>
    <anside id="nav-container">
        <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag): ?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>   
            </ul>
        <h3 id="categories-title">Categorias</h3>
        <ul  id="categories-list">
            <?php foreach($categories as $category): ?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>   
        </ul>
    </anside>
<?php
    include_once("templates/footer.php");
?>
<?php
$posts = [
    [
        'user' => 'franta',
        'avatar' => 'https://i.pinimg.com/1200x/75/cd/8e/75cd8e884849449716e5a4485a7088a3.jpg',
        'post time' => '2h',
        'image' => 'https://i.pinimg.com/736x/0f/d5/da/0fd5dae8a8de780cd47ba34ac75ba5ff.jpg',
        'likes' => 67,
        'caption' => 'Halloween is coming!',
        'comments' => [
            ['author' => 'Sidney', 'content' => 'Another Halloween, another scream..']
        ],
        'time' => '2 hours ago'
    ],
    [
        'user' => 'lara',
        'avatar' => 'https://i.pinimg.com/736x/82/98/a9/8298a96bb6dabc95e45c8c34c39caa5f.jpg',
        'post time' => '15h',
        'image' => 'https://i.pinimg.com/736x/dc/30/16/dc301650dc750536b3363cc89e73dfe8.jpg',
        'likes' => 69,
        'caption' => 'Survival isn’t pretty. It’s powerful.',
        'comments' => [
            ['author' => 'Alex Weiss', 'content' => 'WOW!']
        ],
        'time' => '3 hours ago'
    ],
    [
        'user' => 'skif',
        'avatar' => 'https://i.pinimg.com/736x/0d/2d/b9/0d2db9ec70bcc25255eb7e4e4f85b3f6.jpg',
        'post time' => '20h',
        'image' => 'https://i.pinimg.com/736x/7b/5e/88/7b5e',
        'likes' => 369,
        'caption' => 'Beautiful poppy field',
        'comments' => [
            ['author' => 'German', 'content' => 'I love Pripyat!']
        ],
        'time' => '5 hours ago'
    ],
]
?>

<!doctype html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css" rel="stylesheet">
    <title>Instagram</title>
    <link rel="preconnect" href="https://rsms.me/">
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>


<aside class="sidebar">
    <h1 class="logo">FakeIG</h1>
    <nav>
        <div class="sidebar-icons"><i class="ri-home-5-line"></i><span class="nav-label">Home</span></div>
        <div class="sidebar-icons"><i class="ri-search-line"></i><span class="nav-label">Search</span></div>
        <div class="sidebar-icons"><i class="ri-send-plane-line"></i><span class="nav-label">Messages</span></div>
        <div class="sidebar-icons"><i class="ri-heart-line"></i><span class="nav-label">Notifications</span></div>
        <div class="sidebar-icons"><i class="ri-add-box-line"></i><span class="nav-label">Create</span></div>
        <div class="sidebar-icons"><img src="https://i.pinimg.com/736x/bf/bb/d1/bfbbd1bd4de78b81c7bf0e3d8a7e9ef5.jpg" alt="Profil" class="profile-img"><span class="nav-label">Profile</span></div>
    </nav>
</aside>



<div class="feed">
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <div class="post-header">
                <div class="user-post-info">
                    <div>
                        <img src="<?php echo $post['avatar']; ?>" alt="avatar" class="avatar">
                    </div>
                    <div class="username-and-post-time">
                        <span class="username"><?php echo $post['user']; ?> </span>
                        <span class="post-time">• <?php echo $post['post time']; ?></span>
                    </div>
                </div>
                <span class="post-menu">...</span>
            </div>

            <img src="<?php echo $post['image']; ?>" alt="post img" class="main">

            <div class="icons">
                <i class="ri-heart-line"></i>
                <i class="ri-chat-1-line"></i>
                <i class="ri-send-plane-line"></i>
            </div>

            <p class="text-likes"><?php echo $post['likes']; ?> likes</p>
            <p class="text"><strong><?php echo $post['user'] ?> </strong><?php echo $post['caption'] ?></p>

            <?php foreach ($post['comments'] as $comment): ?>
                <p class="text"><strong><?= $comment['author'] ?></strong> <?= $comment['content'] ?></p>
            <?php endforeach; ?>

            <div class="time">
                <p><?php echo $post['time']; ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

</body>
</html>

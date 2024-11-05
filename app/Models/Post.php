<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Post
{
   private static $berita = [
    [
        "title" => "judul tulisan",
        "slug" => "judul-pertama",
        "author" => "handy",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas voluptas dolores culpa nemo. Libero dolore, maxime cupiditate natus molestiae sapiente placeat excepturi neque provident ratione. Aliquid optio, quae amet cupiditate dolorum soluta exercitationem tempore quaerat dolorem, deserunt nostrum molestiae ab blanditiis atque nobis. Aliquam libero quod eos amet expedita quidem at suscipit voluptatum dolorem. Debitis itaque ratione odit accusamus voluptates maiores minus nemo nihil beatae delectus odio eaque, corrupti commodi error quos adipisci eum, nostrum earum nulla nesciunt reiciendis. Iure cum fugiat harum assumenda totam quas libero asperiores? Beatae itaque minima inventore, numquam reprehenderit magni perspiciatis culpa illo sequi. Inventore libero magnam commodi dolores dolore quaerat fugiat sed voluptatum eaque harum qui impedit officiis, ad, tenetur in nostrum non. Pariatur soluta error aperiam vitae sit provident quasi. Accusamus quasi laboriosam culpa repudiandae ut non sapiente aut, nihil enim laudantium optio deleniti ducimus voluptatem aperiam magnam temporibus alias inventore minus obcaecati! Reprehenderit, dicta eius aliquam itaque quas odit consequatur labore aperiam quaerat architecto vero deserunt, repellat sed veniam maxime impedit nam illum quis. Inventore facere ipsum reiciendis odio quidem odit modi enim debitis, sint rerum sit mollitia veritatis magni neque doloribus tenetur. Voluptates excepturi est id facilis sed. Magni inventore rem autem dolorem iure quisquam dolorum. Dolores aut harum provident reprehenderit cupiditate blanditiis maiores ab facere architecto vitae numquam nesciunt, sint voluptas recusandae nobis quidem aliquid, officiis sapiente? Quibusdam, enim, nulla inventore laboriosam ex doloribus minus facilis saepe nesciunt qui earum quam! Animi temporibus delectus sint! Asperiores omnis aliquam harum vel excepturi quia repellendus fugiat, sed fugit nam, eum saepe tenetur quos sapiente, animi nihil. Quam animi culpa dolore consequuntur natus sapiente dicta delectus, assumenda perspiciatis incidunt porro placeat voluptatibus nihil eos pariatur et vel cumque ipsa quasi a dolor? Alias eaque sequi culpa nobis velit quam ut quas error distinctio!"
    ],
    [
        "title" => "judul tulisan kedua",
        "slug" => "judul-kedua",
        "author" => "cukimay",
        "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quas voluptas dolores culpa nemo. Libero dolore, maxime cupiditate natus molestiae sapiente placeat excepturi neque provident ratione. Aliquid optio, quae amet cupiditate dolorum soluta exercitationem tempore quaerat dolorem, deserunt nostrum molestiae ab blanditiis atque nobis. Aliquam libero quod eos amet expedita quidem at suscipit voluptatum dolorem. Debitis itaque ratione odit accusamus voluptates maiores minus nemo nihil beatae delectus odio eaque, corrupti commodi error quos adipisci eum, nostrum earum nulla nesciunt reiciendis. Iure cum fugiat harum assumenda totam quas libero asperiores? Beatae itaque minima inventore, numquam reprehenderit magni perspiciatis culpa illo sequi. Inventore libero magnam commodi dolores dolore quaerat fugiat sed voluptatum eaque harum qui impedit officiis, ad, tenetur in nostrum non. Pariatur soluta error aperiam vitae sit provident quasi. Accusamus quasi laboriosam culpa repudiandae ut non sapiente aut, nihil enim laudantium optio deleniti ducimus voluptatem aperiam magnam temporibus alias inventore minus obcaecati! Reprehenderit, dicta eius aliquam itaque quas odit consequatur labore aperiam quaerat architecto vero deserunt, repellat sed veniam maxime impedit nam illum quis. Inventore facere ipsum reiciendis odio quidem odit modi enim debitis, sint rerum sit mollitia veritatis magni neque doloribus tenetur. Voluptates excepturi est id facilis sed. Magni inventore rem autem dolorem iure quisquam dolorum. Dolores aut harum provident reprehenderit cupiditate blanditiis maiores ab facere architecto vitae numquam nesciunt, sint voluptas recusandae nobis quidem aliquid, officiis sapiente? Quibusdam, enim, nulla inventore laboriosam ex doloribus minus facilis saepe nesciunt qui earum quam! Animi temporibus delectus sint! Asperiores omnis aliquam harum vel excepturi quia repellendus fugiat, sed fugit nam, eum saepe tenetur quos sapiente, animi nihil. Quam animi culpa dolore consequuntur natus sapiente dicta delectus, assumenda perspiciatis incidunt porro placeat voluptatibus nihil eos pariatur et vel cumque ipsa quasi a dolor? Alias eaque sequi culpa nobis velit quam ut quas error distinctio!"
        ]
    ];

    public static function all()
    {
        return collect(self::$berita);
    }
    public static function find($slug)
    {
    $posts = static::all();
    return $posts->firstWhere('slug',$slug);
    }
}

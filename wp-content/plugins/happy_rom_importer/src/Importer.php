<div class="wrap">
    <h2>Happy Rom Importer</h2>
    <div class="status"></div>
</div>
<div class="wrap">
    <button type="button" class="update-rom">Update ROMS</button>
    <button type="button" class="update-emulator">Update EMULATORS</button>
</div>
<div class="wrap">
    <form action="" method="post" target="_self" autocomplete="off">
        <label><?= !empty($_POST['url']) ? 'New ' : '' ?>URL</label>
        <input type="text" name="url" placeholder="<?= !empty($_POST['url']) ? 'New ' : '' ?>URL" autocomplete="off">
        <button type="submit">Generate</button>
    </form>
</div>
<div class="wrap">
<?php
if (!empty($_POST['url']) && !empty(trim($_POST['url']))) {

	$url = trim($_POST['url']);
	$html = @file_get_html($url);

	if (empty($html)) return 0;

	$thumbnail = $html->find('div.post-thumnail img', 0)->attr['src'];

	$meta_data = $html->find('div.txt-info-wrp', 0);

	if (empty($meta_data)) return 0;
	else{
		$title = $meta_data->find('.title', 0)->plaintext;

		$category = $meta_data->find('div.tag-wrp a.tag-item');
		$category_item = [];
		if ($category) foreach ($category as $value) {
		    $category_item[] = trim($value->plaintext);
        }

		$information = $meta_data->find('div.val', 0);

		if (empty($information)) return 0;
		else {
			$updated = $information->find('div.pub-date', 0)->plaintext;
			$nation = $information->find('div.pub-date', 1)->plaintext;
			$size = $information->find('div.file-size', 0)->plaintext;
			$download_count = $information->find('div.download.count', 0)->plaintext;
			$os = $information->find('div.pub-date', 2)->plaintext;
		}
		$slide_show = $html->find('div.owl-carousel img');
		$img_slide_show = [];
		if ($slide_show) foreach ($slide_show as $value) {
			$img_slide_show[] = $value->attr['src'];
		}
		$content = $html->find('div.entry-description', 0)->plaintext;

		$tag = $html->find('div.entry-tags a.tag');
		$tag_item = [];
		if ($tag) foreach ($tag as $value) {
		    $tag_item[] = trim($value->plaintext);
        }

		$category_item_id = [];
		if (!empty($category_item)) foreach ($category_item as $value) {
			$category_id = wp_create_category($value);
			if (!empty($category_id)) {
				$category_item_id[] = $category_id;
            }
        }

		$post_id = wp_insert_post([
			'post_content' => $content ?? '',
			'post_title' => $title ?? '',
			'post_category' => $category_item_id ?? null,
			'tags_input' => $tag_item ?? null,
		]);
		if (!empty($post_id)) {
			echo "<p class='success'>Post created</p>";
			$thumbnail_id = insert_media($thumbnail, $title);
			if (!empty($thumbnail_id)) {
				echo "<p class='success'>Thumbnail uploaded</p>";
				set_post_thumbnail( $post_id, $thumbnail_id );
            }
			if (!empty($updated)) update_field( 'updated', $updated, $post_id );
			if (!empty($nation)) update_field( 'nation', $nation, $post_id );
			if (!empty($size)) update_field( 'size', $size, $post_id );
			if (!empty($download_count)) update_field( 'download_count', $download_count, $post_id );
			if (!empty($os)) update_field( 'os', $os, $post_id );
			if (!empty($img_slide_show)) foreach ($img_slide_show as $key => $value) {
				if ($key == 3) break;
				$img_id = insert_media($value, $title . ($key + 1));
				update_field( 'image_' . ($key + 1), $img_id, $post_id );
			}
			echo '<a href="'. get_edit_post_link($post_id) .'">Edit this post</a>';
        } else {
			echo "<p class='error'>Create post fail</p>";
			return 0;
        }
    }
}
?>
</div>

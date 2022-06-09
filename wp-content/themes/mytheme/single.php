<?= get_header(); ?>
<div class="main-content mt-2 mt-md-4 mr-md-4 p-2 p-md-0">
	<?php /*$this->load->view('web/parts/breadcrumb'); */?>
    <div class="mb-3">
        <div>
		    <?php the_title( '<h1 class="font-30">', '</h1>' ); ?>
            <div class="font-13 d-flex text-grey1 mb-3">
			    <?= get_post_time('d/m/Y H:i') ?>
            </div>
            <h2 class="font-weight-500 mb-3 font-16">desc of post</h2>
        </div>

        <!--<div class="mb-3">
                <div class="border-bottom-doted mb-3">
                    <a style="margin-bottom: -1px;" class="d-inline-block py-1 px-3 bg-red text-white" href="">XEM
                        THÊM</a>
                </div>
                <div class="row">
					<?php /*if (!empty($related_post)) foreach ($related_post as $key => $value) : if ($key == 3) break; */?>
                        <div class="col-md-4">
                            <div class="row">
                                <div class="col-5 col-md-12 pr-0 pr-md-15px">
                                    <a class="d-block mb-2" href="<?/*= get_post_url($value->slug, $value->id); */?>">
										<?/*= init_thumbnail($value->image, '', '', 'img-fluid', $value->title, 'responsive', true); */?>
                                    </a>
                                </div>
                                <div class="col-7 col-md-12">
                                    <a class="font-weight-500 text-dark d-block mb-2"
                                       href="<?/*= get_post_url($value->slug, $value->id); */?>"><?/*= $value->title; */?></a>
                                </div>
                            </div>
                        </div>
						<?php /*unset($related_post[$key]); endforeach; */?>
                </div>
            </div>-->

	    <?php /*echo init_table_of_content($post->content) */?>

        <!-- content detail -->
        <div class="line-height-24 entry-content">
		    <?php the_content(); ?>
        </div>

	    <?php /*if (!empty($post_tag)) foreach ($post_tag as $value) : */?><!--
                <a class="d-inline-block text-uppercase bg-grey3 px-3 py-1 mb-2 mr-1 text-dark"
                   href="<?php /*echo get_tag_url($value->slug); */?>">#<?php /*echo $value->name; */?></a>
			<?php /*endforeach; */?>

			<?php /*if (!IS_AMP): */?>
                <div class="my-3 bg-white p-2">
                    <div class="fb-comments" id="fb-comment" data-href="https://thanhblog.azurewebsites.net"
                         data-width="100%"
                         data-numposts="5"
                         data-order-by="reverse_time"></div>
                </div>
			<?php /*else: */?>
                <div id="fb-comment" class="my-3">
                    <amp-facebook-comments
                            width="486"
                            height="657"
                            layout="responsive"
                            data-numposts="5"
                            data-href="https://thanhblog.azurewebsites.net"
                    >
                    </amp-facebook-comments>
                </div>
			--><?php /*endif; */?>

        <!--<div class="border-bottom border-grey2 pb-2">
                <h3 class="text-title font-18 font-weight-bold mb-0 border-left-thick pl-2">CÙNG CHUYÊN MỤC</h3>
            </div>
			<?php /*if (!empty($related_post)) foreach ($related_post as $value): */?>
                <div class="py-3 border-bottom border-grey2">
                    <div class="row">
                        <div class="col-5 pr-0">
                            <a href="<?/*= get_post_url($value->slug, $value->id); */?>">
								<?php /*echo init_thumbnail($value->image, '', '', 'img-fluid', $value->title, 'responsive', true); */?>
                            </a>
                        </div>
                        <div class="col-7">
                            <a class="font-weight-500 font-18 text-dark d-block mb-2"
                               href="<?/*= get_post_url($value->slug, $value->id); */?>"><?php /*echo $value->title; */?></a>
                            <p class="font-13 mb-1 d-flex">
                                <span class="font-12 text-grey1">
                                    <?php /*if (!empty($post->category)) : */?>
                                        <span class="text-success font-weight-bold"><?/*= $post->category->name; */?>&nbsp;-&nbsp;</span>
                                    <?php /*endif; */?>
	                                <?php /*echo get_time_ago(strtotime($value->created_time)); */?>
                                </span>
                            </p>
							<?php /*if (!IS_AMP) : */?>
                                <p class="line-height-24 d-none d-md-block max-line-5"><?php /*echo $value->description */?></p>
							<?php /*endif; */?>
                        </div>
                        <p class="line-height-24 col-12 d-md-none mt-3 mb-0"><?php /*echo $value->description */?></p>
                    </div>
                </div>
			--><?php /*endforeach; */?>
    </div>
</div>
<?= get_footer(); ?>

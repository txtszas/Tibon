<?php
function wan_posted_on() {
	printf( '发布时间:<time class="entry-date" datetime="%3$s" pubdate>%4$s</time>',
		esc_url( get_permalink() ),
		esc_attr( get_the_time() ),
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date()),
		esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
		esc_attr( sprintf( '查看 %s 发布的文章', get_the_author() ) ),
		get_the_author()
	);
}
?>
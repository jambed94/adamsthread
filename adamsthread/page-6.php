<?php get_header(); ?>

<div class="row">
		
		<div class="col-xs-12">
		
		</div>
		
</div>

<div class="row">

	<div class="col-xs-12 col-sm-4">
		<?php get_sidebar(); ?>
	</div>
	
	<div class="col-xs-12 col-sm-8">

		<div class="container">

			<h1 class="homeh1">Politics</h1>

			<?php query_posts('category_name=Politics&showposts=3');
				while (have_posts()) : the_post();
				  // do whatever you want
				?>
				<ul>
					<li><h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3></li>
				</ul>
				<?php
				endwhile;
				?>

		</div>

	</div>

	<div class="col-xs-12 col-sm-8">

		<div class="container">

			<h1 class="homeh1">Crime</h1>

			<?php query_posts('category_name=Crime&showposts=3');
				while (have_posts()) : the_post();
				  // do whatever you want
				?>
				<ul>
					<li><h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3></li>
				</ul>
				<?php
				endwhile;
				?>

		</div>

	</div>

	<div class="col-xs-12 col-sm-8">

		<div class="container">

			<h1 class="homeh1">Technology</h1>

			<?php query_posts('category_name=Technology&showposts=3');
				while (have_posts()) : the_post();
				  // do whatever you want
				?>
				<ul>
					<li><h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3></li>
				</ul>
				<?php
				endwhile;
				?>

		</div>

	</div>

	<div class="col-xs-12 col-sm-8">

		<div class="container">

			<h1 class="homeh1">Sports</h1>

			<?php query_posts('category_name=Sports&showposts=3');
				while (have_posts()) : the_post();
				  // do whatever you want
				?>
				<ul>
					<li><h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3></li>
				</ul>
				<?php
				endwhile;
				?>

		</div>

	</div>

	<div class="col-xs-12 col-sm-8">

		<div class="container">

			<h1 class="homeh1">Environment</h1>

			<?php query_posts('category_name=Environment&showposts=3');
				while (have_posts()) : the_post();
				  // do whatever you want
				?>
				<ul>
					<li><h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3></li>
				</ul>
				<?php
				endwhile;
				?>

		</div>

	</div>

	<div class="col-xs-12 col-sm-8">

		<div class="container">

			<h1 class="homeh1">Culture</h1>

			<?php query_posts('category_name=Culture&showposts=3');
				while (have_posts()) : the_post();
				  // do whatever you want
				?>
				<ul>
					<li><h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3></li>
				</ul>
				<?php
				endwhile;
				?>
		</div>

	</div>

	<div class="col-xs-12 col-sm-8">

		<div class="container">

			<h1 class="homeh1">Opinion</h1>

			<?php query_posts('category_name=Opinion&showposts=3');
				while (have_posts()) : the_post();
				  // do whatever you want
				?>
				<ul>
					<li><h3><a href="<?php the_permalink() ?>" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h3></li>
				</ul>
				<?php
				endwhile;
				?>

		</div>

	</div>
	
</div>

<?php get_footer(); ?>
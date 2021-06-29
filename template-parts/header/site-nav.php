<nav id="site-navigation" class="flex items-center space-x-7 text-base text-black" role="navigation" aria-label="navigation">
	<a href="#" class="hover:text-[#017381]">About Us</a>
	<a href="#" class="hover:text-[#017381]">Whitney Johnson</a>
	<span class="hover:text-[#017381] flex items-center cursor-pointer peer">
		<span>Services</span>
		<span class="material-icons-round">keyboard_arrow_down</span>
	</span>
	<?php get_template_part( 'template-parts/header/nav-services-dropdown' ); ?>
	<a href="#" class="hover:text-[#017381]">Podcast</a>
	<span class="relative hover:text-[#017381] flex items-center cursor-pointer group">
		<span>Resources</span>
		<span class="material-icons-round">keyboard_arrow_down</span>
		<?php get_template_part( 'template-parts/header/nav-resources-dropdown' ); ?>
	</span>
	<a role="button" href="#" class="bg-[#C63732] hover:bg-red-700 text-white px-4 py-2 rounded hidden lg:block">Request a Demo</a>
</nav>

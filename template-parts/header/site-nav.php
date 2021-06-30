<span id="mobileMenu" class="material-icons-round text-[#4D4D4D] hover:text-black md:hidden" role="button">menu</span>

<div class="absolute md:static top-[90px] bottom-0 left-0 right-0 block border-t md:border-t-0 border-gray-300 overflow-auto md:overflow-visible">
	<div class="bg-white">
		<nav
			id="site-navigation"
			class="
				hidden container mx-auto flex-col p-4 space-y-7 text-base text-black
				md:flex md:flex-row md:items-center md:mx-0 md:p-0 md:space-y-0 md:space-x-5 lg:space-x-7"
			role="navigation"
			aria-label="navigation"
		>
			<a href="#" class="hover:text-[#017381]">About Us</a>

			<a href="#" class="hover:text-[#017381]">Whitney Johnson</a>

			<span id="servicesNav" class="flex items-center hover:text-[#017381] cursor-pointer peer">
				<span class="flex-grow">Services</span>
				<!-- Two icons so we can modify the arrow on mobile via JS, but leave it alone on desktop -->
				<span class="material-icons-round mobileIcon md:hidden">keyboard_arrow_down</span>
				<span class="material-icons-round hidden md:inline">keyboard_arrow_down</span>
			</span>
			<?php get_template_part( 'template-parts/header/nav-services-dropdown' ); ?>

			<a href="#" class="hover:text-[#017381]">Podcast</a>

			<span id="resourcesNav" class="relative hover:text-[#017381] cursor-pointer group focus:outline-none">
				<span class="flex items-center">
					<span class="flex-grow">Resources</span>
					<!-- Two icons so we can modify the arrow on mobile via JS, but leave it alone on desktop -->
					<span class="material-icons-round mobileIcon md:hidden">keyboard_arrow_down</span>
					<span class="material-icons-round hidden md:inline">keyboard_arrow_down</span>
				</span>
				<?php get_template_part( 'template-parts/header/nav-resources-dropdown' ); ?>
			</span>

			<a role="button" href="#" class="bg-[#C63732] hover:bg-red-700 text-white text-center px-4 py-2 rounded block md:hidden lg:block">Request a Demo</a>
		</nav>
	</div>
</div>

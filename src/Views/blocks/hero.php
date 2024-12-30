<header>
	<div class="text-white pt-32 px-8 flex flex-col items-center justify-center text-center relative">
		<div class="bg-purple bg-hero-pattern bg-no-repeat bg-cover absolute top-0 left-0 w-full h-2/3 -z-10"></div>
		<h1 class="text-4xl sm:text-6xl font-bold mb-4"><?= $heading['value']; ?></h1>
		<p class="text-lg"><?= $tagline['value']; ?></p>

		<div class="mt-8 mb-12">
			<a href="<?php echo $cta['url']['value']; ?>" class="bg-dark-purple text-white px-4 py-2 rounded-md"><?php echo $cta['label']['value']; ?> </a>
		</div>
		
		<img class="mb-32 device-image w-[210px]" src="<?= $background['value']; ?>" alt="">
	</div>
</header>

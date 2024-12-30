<?php if ($style['value'] == 'two-columns-tab'): ?>
    <div class="max-w-screen-xl mx-auto px-8 features">
        <h2 class="text-4xl font-bold text-center py-32"><?= $heading['value'] ?></h2>
            <div class="grid grid-cols-2">
                <?php foreach ($items as $index=>$feature) : ?>
                <?php 
                    $c = className([
                        // 'bg-light-blue' => $index == 0,
                        'border-b' => $index != count($items) -1
                    ]);
                ?>

                <label>
                    <div class='has-[:checked]:bg-light-blue hover:bg-light-blue cursor-pointer col-start-1 col-end-1 p-7 <?= $c ?>'>
                        <input type="radio" name="name" class="hidden" <?= className('checked', $index == 0) ?>>
                        <h2 class="text-xl font-bold mb-2 flex justify-between"><?= $feature['title']['value']; ?> <?= img('arrow.svg')?></h2>
                        <p class="text-lg "><?= $feature['description']['value']; ?></p>
                    </div>
                </label>
                <img class="device-image col-start-2 col-end-2 row-start-1 row-end-9 mx-auto max-w-[210px]" src="<?= $feature['image']['value']; ?>" alt="">
                <?php endforeach; ?>
            </div>
    </div>
<?php else: ?>
    <div class="max-w-screen-xl mx-auto px-8">
        <h2 class="text-4xl font-bold text-center py-32"><?= $heading['value'] ?></h2>

        <div class="grid grid-cols-1 sm:grid-cols-2 <?= className('gap-6', $style['value'] != 'grid-full-width')?>">
            <?php foreach ($items as $index=>$feature) : ?>
            <?php $fullRow = count($items) == $index +1 && $index % 2 == 0; ?>

            <?php 
                $bg = ['bg-light-blue', 'bg-light-pink', 'bg-light-orange'][$index % 3];
                $shadowBg = ['sm:-shadow-bg-1/2 shadow-bg-light-blue', 'sm:shadow-bg-1/2 shadow-bg-light-pink', 'sm:-shadow-bg-1/2 shadow-bg-light-orange'][$index % 3];

                $c = className([
                    'sm:col-start-1 sm:col-end-3' => $fullRow,
                    'sm:grid-cols-2' => $fullRow,
                    'gap-16' => $fullRow,
                        'gap-2' => !$fullRow,
                    $shadowBg => $style['value'] == 'grid-full-width',
                ]);

                $c = $c ." ". $bg;
            ?>

            <div class="px-6 py-12 rounded-md grid items-center <?=$c?>">
                <img class="device-image <?= className('sm:order-1', $fullRow)?>" src="<?= $feature['image']['value']; ?>" alt="">
                <div>
                    <h2 class="text-xl font-bold mb-2"><?= $feature['title']['value']; ?></h2>
                    <p class="text-lg "><?= $feature['description']['value']; ?></p>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endif; ?>

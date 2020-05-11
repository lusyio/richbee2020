<?php

foreach ($service as $item) :
    $serviceId = $item['id'];
    $serviceName = $item['name'];
endforeach;

$serviceTemp = __DIR__ . '/services/' . $serviceId . '.php';

$cases = DB('*', 'cases', 'service=' . $serviceId);
?>
    <div class="section-service" id="serviceSection">

        <div class="container">
            <div class="section-service__info">
                <h1 class="section-service__title"><?= $serviceName; ?></h1>
            </div>
        </div>
    </div>
<?php if (file_exists($serviceTemp)) :

    include $serviceTemp;

endif;
if (!empty($cases)) :

    include __DIR__ . '/sections/section-service-cases.php';

endif;



            <?php
            $topCases = [24, 26, 25];
            foreach ($topCases as $id) {
                $case = DB('*', 'cases', 'id=' . $id);

                foreach ($case as $item) {
                    if (isset($item['tilda_url']) && !empty($item['tilda_url'])) {
                        $caseFriendlyUrl = $item['tilda_url'];
                    } else {
                        $caseFriendlyUrl = '/case/' . $item['friendly_url'];
                    }
                    $caseId = $item['id'];
                    $caseName = $item['name'];
                    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                    include 'template/case.php';
                }
            }
            ?>

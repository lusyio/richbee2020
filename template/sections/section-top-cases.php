
            <?php
            $topCases = [24, 25, 23];
            foreach ($topCases as $id) {
                $case = DB('*', 'cases', 'id=' . $id);

                foreach ($case as $item) {
                    $caseFriendlyUrl = $item['friendly_url'];
                    $caseId = $item['id'];
                    $caseName = $item['name'];
                    $caseService = DBOnce('name', 'services', 'id=' . $item['service']);
                    include 'template/case.php';
                }
            }
            ?>

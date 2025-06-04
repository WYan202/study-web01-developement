
        <?php
        $startDate = date("Y-m-d");
        $endDate = date("Y-m-d", strtotime("+1 year"));

        for ($current = strtotime($startDate); $current <= strtotime($endDate); $current = strtotime("+1 day", $current)) {
            print();
        }


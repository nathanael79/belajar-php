<?php

namespace Com\Khannedy\Php {

    class Program
    {

    }

}

namespace Com\Khannedy\Php\Model {

    class Customer
    {

    }

    class Program
    {

    }

}

namespace {

    use Com\Khannedy\Php\Program as App;
    use Com\Khannedy\Php\Model\{Customer, Program};

    $customer = new Customer();
    var_dump($customer);

    $app = new App();
    var_dump($app);

}

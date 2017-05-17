<!doctype html>

<html>
    <head>
        <meta charset="utf-8">

    </head>
    <body>
    
        <!-- working with expressions -->
        <h3>Temperature</h3>
        <p>Farenheit: <?= $temp ?> degrees</p>
        <p>Celsius: <?= $temp - 32 * (5.0/9.0) ?> degrees</p>
        
        <!-- looping over arrays -->
        <h3>Bookmarks</h3>
        <p>My first bookmark: <a href="<?= $bookmarks[0] ?>"><?= $bookmarks[0] ?></a></p>
        
        <ul>
            <?php foreach (($bookmarks?:[]) as $bookmark): ?>
                <li><a href="<?= $bookmark ?>"> <?= str_replace('http://', '', $bookmark); ?></a></li>
            <?php endforeach; ?>
        </ul>
        
        <!–- an associative array -->
        <h3>Addresses</h3>
        <p><?= $addresses['primary'] ?></p>
        <p><?= $addresses['secondary'] ?></p>
        
        <!-- looping over associative arrays -->
        <?php foreach (($addresses?:[]) as $key=>$value): ?>
            <p><?= $key ?> - <?= $value ?></p>
        <?php endforeach; ?>
        
        <h3>Desserts Options</h3>
        <?php foreach (($desserts?:[]) as $key=>$value): ?>
            <input type="checkbox"><?= $value ?></input><br>
        <?php endforeach; ?>

        <!-- conditional content -->
        <h3>Message</h3>
        <?php if ($preferredCustomer): ?>
            <strong>Thank you for being a preferred customer!</strong><br>
        <?php endif; ?>

        <?php if ($lastLogin > strtotime('-1 month')): ?>
            Welcome back!
            <?php else: ?>It's been a while!
        <?php endif; ?>          

        <!-- printing objects -->
        <h3>My Pet</h3>
        <p><?= $myPet->getName() ?></p>
        <p><?= $myPet->getColor() ?></p>
        
        <h3>Henrietta</h3>
        <?php if ($color == $henrietta->getColor()): ?>
             >:3 
            <?php else: ?><?= $henrietta->getName() ?> is <?= $henrietta->getColor() ?>
        <?php endif; ?> 
        
        
        
        
        
        
    </body>
</html>
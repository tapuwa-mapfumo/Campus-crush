<div class="leftbar">
        <div class="leftbar-container">

         <h2>
    Trends
</h2>   
<div class="trends">
    <?php foreach($trends as $trend){ ?>
        <a href="../Trends/trends.php?trends=<?= $trend['topic'] ?>">
            <p>#<?= $trend['topic'] ?></p>
        </a>
   <?php } ?>

   <div class="locs">
    <h3>Top Places</h3>
    <?php foreach($location as $trend){ ?>
    <p>#<?= $trend['location'] ?></p>
   <?php } ?>
   </div>

</div>
        </div>

    </div>


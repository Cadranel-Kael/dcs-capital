<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Countries</title>
</head>
<body>
    <h1>Countries</h1>
    <form>
        <label for="country">Country</label>
        <select name="country" id="country">
            <option value="">Select a country</option>
            <?php foreach ($country_names as $name): ?>
                <?php if (isset($_GET['country']) && $_GET['country'] === $name): ?>
                    <option value="<?= $name ?>" selected><?= ucfirst($name) ?></option>
                <?php else: ?>
                    <option value="<?= $name ?>"><?= ucfirst($name) ?></option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select>
        <button type="submit">Search</button>
    </form>
    <article>
        <?php if (isset($_GET['country']) && in_array($_GET['country'], $country_names)): ?>
            <h2><?= ucfirst($_GET['country']) ?></h2>
            <p>Capital: <?= ucfirst($countries[$_GET['country']]['capital_name']) ?></p>
            <img src="./images/<?= $countries[$_GET['country']]['flag_file'] ?>" alt="Flag of <?= ucfirst($_GET['country']) ?>">
        <?php endif; ?>
    </article>
</body>
</html>
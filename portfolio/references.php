<?php
/**
 * Page 4 – References
 */
$pageTitle = 'References | Ntsako Maluleke';

$references = [
  [
    'name'        => 'Gideon Ude Nachi',
    'affiliation' => 'Eduvos',
    'email'       => 'Gideon.UdeNachi@EDUVOS.COM',
    'initials'    => 'GU',
  ],
  [
    'name'        => 'Sakafuku Tshink',
    'affiliation' => 'Eduvos',
    'email'       => 'Sakafuku.Tshink@EDUVOS.COM',
    'initials'    => 'ST',
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $pageTitle; ?></title>
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>

<?php include 'includes/nav.php'; ?>

<!-- Hero -->
<header class="hero">
  <h1>References</h1>
  <p class="subtitle">Professional contacts &amp; academic referees</p>
</header>

<!-- Content -->
<main class="page-wrapper">

  <h2 class="section-title">My References</h2>

  <?php foreach ($references as $ref): ?>
  <div class="ref-card fade-in">
    <div class="ref-avatar" aria-hidden="true">
      <?php echo htmlspecialchars($ref['initials']); ?>
    </div>
    <div class="ref-info">
      <p class="ref-name"><?php echo htmlspecialchars($ref['name']); ?></p>
      <p class="ref-affiliation"><?php echo htmlspecialchars($ref['affiliation']); ?></p>
      <a href="mailto:<?php echo htmlspecialchars($ref['email']); ?>">
        <?php echo htmlspecialchars($ref['email']); ?>
      </a>
    </div>
  </div>
  <?php endforeach; ?>

</main>

<?php include 'includes/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>

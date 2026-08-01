<?php
/**
 * Page 2 – Education
 */
$pageTitle = 'Education | Ntsako Maluleke';

$education = [
  [
    'school'  => 'Curro Hazeldean',
    'degree'  => 'Matric Certificate',
    'year'    => '2023',
    'notes'   => [
      'Achieved a Bachelor\'s degree pass.',
      'Obtained 2 distinctions.',
    ],
  ],
  [
    'school'  => 'Eduvos Menlyn',
    'degree'  => 'BSc IT &ndash; Software Engineering',
    'year'    => '2024 &ndash; current',
    'notes'   => [
      '1st Year &mdash; Obtained 2 distinctions.',
      '2nd Year &mdash; Obtained 4 distinctions.',
    ],
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
  <h1>Education</h1>
  <p class="subtitle">Academic background &amp; achievements</p>
</header>

<!-- Content -->
<main class="page-wrapper">

  <h2 class="section-title">Academic Journey</h2>

  <div class="timeline">
    <?php foreach ($education as $index => $item): ?>
    <div class="timeline-item fade-in">
      <p class="edu-degree"><?php echo $item['year']; ?></p>
      <p class="edu-school"><?php echo $item['school']; ?></p>
      <p class="edu-degree" style="font-size:0.9rem; margin-top:0.2rem;">
        <?php echo $item['degree']; ?>
      </p>
      <?php foreach ($item['notes'] as $note): ?>
        <p class="edu-note"><?php echo $note; ?></p>
      <?php endforeach; ?>
      <?php
        // Count distinctions from notes and display badges
        $distinctions = 0;
        foreach ($item['notes'] as $note) {
          if (preg_match('/(\d+)\s+distinction/i', $note, $m)) {
            $distinctions = (int)$m[1];
          }
        }
        for ($i = 0; $i < $distinctions; $i++): ?>
          <span class="badge">&#9733; Distinction</span>
        <?php endfor; ?>
    </div>
    <?php endforeach; ?>
  </div>

</main>

<?php include 'includes/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>

<?php
/**
 * Page 2 – Education
 * Includes full Eduvos academic transcript grouped by year.
 */
$pageTitle = 'Education | Ntsako Maluleke';

// P* = Distinction (75+)
$transcript = [
  2024 => [
    'nqf'     => 'NQF 5',
    'modules' => [
      ['code' => 'ITAIA1', 'name' => 'AI Ethics and Privacy',                   'final' => 81,  'distinction' => true,  'credits' => 10],
      ['code' => 'ITCFA1', 'name' => 'Cloud Based Technologies',                'final' => 64,  'distinction' => false, 'credits' => 10],
      ['code' => 'ITCNA1', 'name' => 'Computer Network and Security',            'final' => 62,  'distinction' => false, 'credits' => 10],
      ['code' => 'ITCTA1', 'name' => 'Computer Network Technologies',            'final' => 68,  'distinction' => false, 'credits' => 10],
      ['code' => 'ITSMA1', 'name' => 'Computer Skills (Microsoft)',              'final' => 79,  'distinction' => true,  'credits' => 10],
      ['code' => 'ITISA1', 'name' => 'Introduction to Information Systems',      'final' => 54,  'distinction' => false, 'credits' => 10],
      ['code' => 'ITPLA1', 'name' => 'Introduction to Programming',              'final' => 52,  'distinction' => false, 'credits' => 12],
      ['code' => 'ITLSA1', 'name' => 'Linux-based Operating Systems',            'final' => 71,  'distinction' => false, 'credits' => 10],
      ['code' => 'ITMTA1', 'name' => 'Mathematics 1A',                           'final' => 52,  'distinction' => false, 'credits' => 12],
      ['code' => 'ITMTB1', 'name' => 'Mathematics 1B',                           'final' => 57,  'distinction' => false, 'credits' => 12],
      ['code' => 'ITPFA1', 'name' => 'Non-Technical Skills for IT Professionals','final' => 62,  'distinction' => false, 'credits' => 10],
      ['code' => 'ITPPA1', 'name' => 'Procedural Programming',                   'final' => 69,  'distinction' => false, 'credits' => 10],
    ],
  ],
  2025 => [
    'nqf'     => 'NQF 6',
    'modules' => [
      ['code' => 'ITUEA2', 'name' => 'Usability Engineering',                                    'final' => 73,  'distinction' => false, 'credits' => 12],
      ['code' => 'ITSEA2', 'name' => 'Software Process, Architecture Design and Quality Assurance','final' => 70, 'distinction' => false, 'credits' => 12],
      ['code' => 'ITDJA2', 'name' => 'Data Structures and Algorithms in Java (elective)',         'final' => 89,  'distinction' => true,  'credits' => 12],
      ['code' => 'ITPMA2', 'name' => 'IT Project Management',                                    'final' => 69,  'distinction' => false, 'credits' => 12],
      ['code' => 'ITCOA2', 'name' => 'Web Server Management',                                    'final' => 79,  'distinction' => true,  'credits' => 12],
      ['code' => 'ITJVA2', 'name' => 'Programming in Java (elective)',                            'final' => 67,  'distinction' => false, 'credits' => 12],
      ['code' => 'ITNSA2', 'name' => 'Network Security',                                         'final' => 66,  'distinction' => false, 'credits' => 12],
      ['code' => 'ITMBA2', 'name' => 'Mobile Application Development and Big Data',              'final' => 77,  'distinction' => true,  'credits' => 12],
      ['code' => 'ITDSA2', 'name' => 'Database Systems',                                         'final' => 79,  'distinction' => true,  'credits' => 12],
      ['code' => 'ITSSA2', 'name' => 'Software and Security Engineering',                        'final' => 70,  'distinction' => false, 'credits' => 12],
    ],
  ],
  2026 => [
    'nqf'     => 'NQF 7',
    'modules' => [
      ['code' => 'ITTNA3', 'name' => '4IR Technologies',                          'final' => 81,  'distinction' => true,  'credits' => 15],
      ['code' => 'ITECA3', 'name' => 'Web Development and eCommerce',             'final' => 84,  'distinction' => true,  'credits' => 15],
      ['code' => 'ITDMA3', 'name' => 'Research Design and Methodology',           'final' => 73,  'distinction' => false, 'credits' => 15],
      ['code' => 'ITOOA3', 'name' => 'Object Oriented Systems Analysis and Design','final' => 82, 'distinction' => true,  'credits' => 15],
    ],
  ],
];

// Compute summary stats
$totalCredits     = 0;
$totalDistinctions = 0;
$totalModules     = 0;

foreach ($transcript as $year => $data) {
  foreach ($data['modules'] as $mod) {
    $totalCredits += $mod['credits'];
    $totalModules++;
    if ($mod['distinction']) $totalDistinctions++;
  }
}
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

<main class="page-wrapper">

  <!-- ── Schooling ─────────────────────────────── -->
  <h2 class="section-title">Schooling</h2>

  <div class="timeline">
    <div class="timeline-item fade-in">
      <p class="edu-degree">2023</p>
      <p class="edu-school">Curro Hazeldean</p>
      <p class="edu-degree" style="font-size:0.9rem; margin-top:0.2rem;">Matric Certificate</p>
      <p class="edu-note">Achieved a Bachelor&rsquo;s degree pass.</p>
      <p class="edu-note">Obtained 2 distinctions.</p>
      <span class="badge">&#9733; Distinction</span>
      <span class="badge">&#9733; Distinction</span>
    </div>
  </div>

  <!-- ── Tertiary ───────────────────────────────── -->
  <h2 class="section-title" style="margin-top:3rem;">Tertiary Education</h2>

  <div class="timeline" style="margin-bottom:1rem;">
    <div class="timeline-item fade-in">
      <p class="edu-degree">2024 &ndash; current</p>
      <p class="edu-school">Eduvos Menlyn</p>
      <p class="edu-degree" style="font-size:0.9rem; margin-top:0.2rem;">
        BSc IT &ndash; Software Engineering &nbsp;|&nbsp; NQF 7 &nbsp;|&nbsp; SAQA Id 120690
      </p>
      <p class="edu-note">Status: <strong>Registered</strong> &nbsp;&mdash;&nbsp; Campus Full Time</p>
      <p class="edu-note">Student No: EDUV4959752</p>
    </div>
  </div>

  <!-- ── Stats Bar ──────────────────────────────── -->
  <div class="stats-bar fade-in">
    <div class="stat">
      <span class="stat-num"><?php echo $totalModules; ?></span>
      <span class="stat-label">Modules</span>
    </div>
    <div class="stat">
      <span class="stat-num"><?php echo $totalDistinctions; ?></span>
      <span class="stat-label">Distinctions</span>
    </div>
    <div class="stat">
      <span class="stat-num"><?php echo $totalCredits; ?></span>
      <span class="stat-label">Credits Earned</span>
    </div>
  </div>

  <!-- ── Module Tables by Year ─────────────────── -->
  <?php foreach ($transcript as $year => $data): ?>

  <div class="year-block fade-in">
    <div class="year-header">
      <span class="year-label"><?php echo $year; ?></span>
      <span class="nqf-tag"><?php echo $data['nqf']; ?></span>
    </div>

    <div class="module-table-wrap">
      <table class="module-table">
        <thead>
          <tr>
            <th>Module</th>
            <th class="num-col">Final %</th>
            <th class="num-col">Credits</th>
            <th class="num-col">Result</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data['modules'] as $mod): ?>
          <tr class="<?php echo $mod['distinction'] ? 'row-distinction' : ''; ?>">
            <td>
              <?php if ($mod['distinction']): ?>
                <span class="dist-star" title="Distinction">&#9733;</span>
              <?php endif; ?>
              <?php echo htmlspecialchars($mod['name']); ?>
              <small class="module-code"><?php echo htmlspecialchars($mod['code']); ?></small>
            </td>
            <td class="num-col">
              <span class="score <?php echo $mod['distinction'] ? 'score-dist' : ''; ?>">
                <?php echo $mod['final']; ?>%
              </span>
            </td>
            <td class="num-col"><?php echo $mod['credits']; ?></td>
            <td class="num-col">
              <span class="pass-badge">PASSED</span>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>

  <?php endforeach; ?>

  <p class="transcript-note fade-in">
    &#9733; Denotes a distinction result (P*) as recorded on the official Eduvos academic transcript.
  </p>

</main>

<?php include 'includes/footer.php'; ?>

<script src="js/main.js"></script>
</body>
</html>

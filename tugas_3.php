<?php
echo "<h1>SOAL CODING STRUKTUR DATA</h1>";
echo "<hr><br>";

/* =====================================
   1. ARRAY
===================================== */
echo "<h2>1. ARRAY</h2>";

$nilai = [80, 85, 90, 75, 88];

echo "Isi Array:<br>";
foreach ($nilai as $n) {
    echo "- $n<br>";
}

$total = array_sum($nilai);
$rata = $total / count($nilai);

echo "Total Nilai : $total<br>";
echo "Rata-rata   : $rata<br>";

echo "<br><hr><br>";

/* =====================================
   2. SINGLE LINKED LIST
===================================== */
echo "<h2>2. SINGLE LINKED LIST</h2>";

class Node {
    public $data;
    public $next;

    public function __construct($data) {
        $this->data = $data;
        $this->next = null;
    }
}

$node1 = new Node(10);
$node2 = new Node(20);
$node3 = new Node(30);

$node1->next = $node2;
$node2->next = $node3;

$current = $node1;
while ($current != null) {
    echo "- " . $current->data . "<br>";
    $current = $current->next;
}

echo "<br><hr><br>";

/* =====================================
   3. STACK (LIFO)
===================================== */
echo "<h2>3. STACK (LIFO)</h2>";

$stack = [];

array_push($stack, 10);
array_push($stack, 20);
array_push($stack, 30);

array_pop($stack); // hapus data teratas

echo "Isi Stack:<br>";
foreach ($stack as $data) {
    echo "- $data<br>";
}

echo "<br><hr><br>";

/* =====================================
   4. QUEUE (FIFO)
===================================== */
echo "<h2>4. QUEUE (FIFO)</h2>";

$queue = [];

array_push($queue, "A");
array_push($queue, "B");
array_push($queue, "C");

array_shift($queue); // hapus data paling depan

echo "Isi Queue:<br>";
foreach ($queue as $data) {
    echo "- $data<br>";
}

echo "<br><hr><br>";

/* =====================================
   5. BINARY TREE
===================================== */
echo "<h2>5. BINARY TREE</h2>";

class TreeNode {
    public $data;
    public $left;
    public $right;

    public function __construct($data) {
        $this->data = $data;
        $this->left = null;
        $this->right = null;
    }
}

$root = new TreeNode("Root");
$root->left = new TreeNode("Child Kiri");
$root->right = new TreeNode("Child Kanan");

function tampilTree($node) {
    if ($node != null) {
        echo "- " . $node->data . "<br>";
        tampilTree($node->left);
        tampilTree($node->right);
    }
}

tampilTree($root);

echo "<br><hr><br>";

/* =====================================
   6. GRAPH (Adjacency List)
===================================== */
echo "<h2>6. GRAPH</h2>";

$graph = [
    "A" => ["B", "C"],
    "B" => [],
    "C" => []
];

foreach ($graph as $node => $connections) {
    echo "Node $node terhubung ke: ";
    echo empty($connections) ? "-" : implode(", ", $connections);
    echo "<br>";
}

echo "<br><hr><br>";

/* =====================================
   7. HASH TABLE
===================================== */
echo "<h2>7. HASH TABLE</h2>";

$hashTable = [
    "2311001" => "Ahmad Fauzi",
    "2311002" => "Siti Aisyah",
    "2311003" => "Muhammad Rizki"
];

foreach ($hashTable as $nim => $nama) {
    echo "NIM: $nim | Nama: $nama<br>";
}

echo "<br><hr>";
?>
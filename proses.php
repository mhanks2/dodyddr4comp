<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Definisi array harga untuk semua komponen
$harga_motherboard = [
    'ASUS ROG MAXIMUS Z790' => 12500000,
    'MSI MPG Z690' => 5200000,
    'GIGABYTE B660M' => 2300000,
    'ASRock H610M' => 1500000,
    'ASUS ROG CROSSHAIR X670E' => 11800000,
    'MSI MPG B550' => 3200000,
    'GIGABYTE X570S' => 4500000,
    'ASRock B450M' => 1800000
];

$harga_processor = [
    'Intel Core i9-13900K' => 10500000,
    'Intel Core i7-13700K' => 7800000,
    'Intel Core i5-13600K' => 5500000,
    'Intel Core i3-13100' => 2300000,
    'AMD Ryzen 9 7950X' => 11500000,
    'AMD Ryzen 7 7700X' => 7200000,
    'AMD Ryzen 5 7600X' => 4800000,
    'AMD Ryzen 5 5600X' => 3500000
];

$harga_vga = [
    'NVIDIA RTX 4090' => 28500000,
    'NVIDIA RTX 4080' => 19800000,
    'NVIDIA RTX 4070 Ti' => 14500000,
    'NVIDIA RTX 3080' => 11500000,
    'NVIDIA RTX 3070' => 8500000,
    'NVIDIA RTX 3060' => 5500000,
    'AMD RX 7900 XTX' => 20500000,
    'AMD RX 7900 XT' => 17500000,
    'AMD RX 6800 XT' => 11000000,
    'AMD RX 6700 XT' => 7500000
];

$harga_ram = [
    'G.SKILL Trident Z5 RGB 32GB' => 3800000,
    'Corsair Dominator 32GB' => 3500000,
    'G.SKILL Trident Z RGB 32GB' => 2500000,
    'Corsair Vengeance RGB 32GB' => 2200000,
    'G.SKILL Ripjaws V 16GB' => 1200000,
    'Kingston Fury 16GB' => 1100000
];

$harga_psu = [
    'Corsair AX1600i' => 7500000,
    'be quiet! Dark Power Pro 12' => 5800000,
    'Seasonic PRIME TX' => 4800000,
    'Corsair RM850x' => 2500000,
    'be quiet! Straight Power 11' => 2200000,
    'Seasonic Focus GX' => 1500000
];

$harga_storage = [
    'Samsung 990 PRO 2TB' => 4800000,
    'WD Black SN850X 2TB' => 4200000,
    'Samsung 970 EVO Plus 1TB' => 1800000,
    'Samsung 870 EVO 1TB' => 1500000,
    'Crucial MX500 1TB' => 1300000,
    'Seagate Barracuda 4TB' => 1400000,
    'WD Blue 2TB' => 800000
];

$harga_casing = [
    'Lian Li PC-O11 Dynamic XL' => 4200000,
    'Lian Li PC-O11 Dynamic' => 2800000,
    'NZXT H510 Elite' => 2500000,
    'NZXT H7 Flow' => 1800000,
    'Corsair 5000D Airflow' => 2900000,
    'Corsair 4000D Airflow' => 1600000,
    'Phanteks Eclipse P500A' => 2200000,
    'Phanteks Eclipse P400A' => 1400000,
    'be quiet! Dark Base Pro 900' => 4500000,
    'be quiet! Pure Base 500DX' => 1700000,
    'Fractal Design Meshify 2' => 2600000,
    'Fractal Design Meshify C' => 1500000,
    'Cooler Master H500P Mesh' => 2300000,
    'Cooler Master TD500 Mesh' => 1300000
];

// Definisi array harga untuk kursi dan monitor
$harga_chairs = [
    'Secretlab TITAN Evo 2022' => 8500000,
    'DXRacer Master Series' => 7200000,
    'Fantech Alpha GC-283' => 2300000,
    'Herman Miller Aeron' => 25000000,
    'Steelcase Gesture' => 18000000,
    'ErgoHuman V2' => 8900000
];

$harga_monitors = [
    'ASUS ROG Swift PG32UQX' => 29900000,
    'Samsung Odyssey G7' => 12500000,
    'LG 27GP850-B' => 7800000,
    'Dell UltraSharp U3223QE' => 18500000,
    'BenQ PD3200U' => 11200000
];

$harga_headsets = [
    'SteelSeries Arctis Nova Pro' => 4900000,
    'Logitech G Pro X' => 2800000,
    'HyperX Cloud Alpha' => 1500000,
    'Razer BlackShark V2' => 1800000
];

$harga_keyboards = [
    'Logitech G915' => 3200000,
    'Razer Huntsman V2' => 2900000,
    'Ducky One 3' => 2200000,
    'GMMK Pro' => 4500000,
    'Keychron Q1' => 3800000
];

$harga_routers = [
    'ASUS ROG Rapture GT-AXE16000' => 12900000,
    'TP-Link Archer GX90' => 4500000,
    'Ubiquiti Dream Machine Pro' => 8200000,
    'Synology RT6600ax' => 5900000
];

$harga_soundcards = [
    'Creative Sound Blaster AE-9' => 4800000,
    'ASUS Xonar AE' => 1200000,
    'Schiit Stack' => 3500000,
    'FiiO K9 Pro' => 8900000
];

$harga_laptops = [
    'ASUS ROG Zephyrus G14' => 35900000,
    'Razer Blade 16' => 42500000,
    'Lenovo Legion Pro 5' => 25900000,
    'MSI Pulse GL76' => 19500000,
    'Acer Nitro 5' => 15900000,
    'HP Victus 15' => 13500000
];

// Organize processors and motherboards by platform
$amd_processors = [
    'AMD Ryzen 9 7950X' => 11500000,
    'AMD Ryzen 7 7700X' => 7200000,
    'AMD Ryzen 5 7600X' => 4800000,
    'AMD Ryzen 5 5600X' => 3500000
];

$intel_processors = [
    'Intel Core i9-13900K' => 10500000,
    'Intel Core i7-13700K' => 7800000,
    'Intel Core i5-13600K' => 5500000,
    'Intel Core i3-13100' => 2300000
];

$amd_motherboards = [
    'ASUS ROG CROSSHAIR X670E' => 11800000,
    'MSI MPG B550' => 3200000,
    'GIGABYTE X570S' => 4500000,
    'ASRock B450M' => 1800000
];

$intel_motherboards = [
    'ASUS ROG MAXIMUS Z790' => 12500000,
    'MSI MPG Z690' => 5200000,
    'GIGABYTE B660M' => 2300000,
    'ASRock H610M' => 1500000
];

// Update the processor and motherboard arrays to reference the platform-specific arrays
$harga_processor = array_merge($intel_processors, $amd_processors);
$harga_motherboard = array_merge($intel_motherboards, $amd_motherboards);

// Definisi paket komputer
$paket_komputer = [
    'gaming_basic' => [
        'nama' => 'Paket Gaming Basic',
        'harga' => 10500000,
        'komponen' => [
            'Motherboard' => 'ASRock B450M',
            'Processor' => 'AMD Ryzen 5 5600X',
            'VGA' => 'NVIDIA RTX 3050',
            'RAM' => 'G.SKILL Ripjaws V 16GB',
            'PSU' => 'Seasonic Focus GX-650',
            'Storage' => 'Samsung 970 EVO Plus 1TB'
        ]
    ],
    'gaming_advanced' => [
        'nama' => 'Paket Gaming Advanced',
        'harga' => 25000000,
        'komponen' => [
            'Motherboard' => 'GIGABYTE X570S',
            'Processor' => 'AMD Ryzen 9 5900X',
            'VGA' => 'NVIDIA RTX 3080',
            'RAM' => 'G.SKILL Trident Z RGB 32GB',
            'PSU' => 'Corsair RM850x',
            'Storage' => 'Samsung 990 PRO 2TB'
        ]
    ],
    'gaming_ultimate' => [
        'nama' => 'Paket Gaming Ultimate',
        'harga' => 45000000,
        'komponen' => [
            'Motherboard' => 'ASUS ROG CROSSHAIR X670E',
            'Processor' => 'AMD Ryzen 9 7950X',
            'VGA' => 'NVIDIA RTX 4090',
            'RAM' => 'G.SKILL Trident Z5 RGB 32GB',
            'PSU' => 'Corsair AX1600i',
            'Storage' => 'Samsung 990 PRO 2TB'
        ]
    ],
    'office_basic' => [
        'nama' => 'Paket Office Basic',
        'harga' => 7500000,
        'komponen' => [
            'Motherboard' => 'ASRock H610M',
            'Processor' => 'Intel Core i3-13100',
            'RAM' => 'Kingston Fury 16GB',
            'PSU' => 'Seasonic Focus GX-650',
            'Storage' => 'Samsung 870 EVO 1TB'
        ]
    ],
    'office_advanced' => [
        'nama' => 'Paket Office Advanced',
        'harga' => 12500000,
        'komponen' => [
            'Motherboard' => 'GIGABYTE B660M',
            'Processor' => 'Intel Core i5-13600K',
            'RAM' => 'Corsair Vengeance RGB 32GB',
            'PSU' => 'be quiet! Straight Power 11',
            'Storage' => 'Samsung 990 PRO 2TB'
        ]
    ],
    'workstation' => [
        'nama' => 'Paket Workstation',
        'harga' => 35000000,
        'komponen' => [
            'Motherboard' => 'MSI MPG Z690',
            'Processor' => 'Intel Core i9-13900K',
            'VGA' => 'NVIDIA RTX 3080 Ti',
            'RAM' => 'Corsair Dominator 32GB',
            'PSU' => 'Seasonic PRIME TX',
            'Storage' => 'Samsung 990 PRO 2TB'
        ]
    ]
];

// Add peripheral price arrays
$harga_peripherals = [
    'headsets' => [
        'SteelSeries Arctis Nova Pro' => 4900000,
        'Astro A50 Gen 4' => 4200000,
        'Logitech G Pro X Wireless' => 2800000,
        'Razer BlackShark V2 Pro' => 2500000,
        'HyperX Cloud Alpha Wireless' => 2300000,
        'HyperX Cloud Alpha' => 1500000,
        'Razer BlackShark V2 X' => 900000
    ],
    'mice' => [
        'Logitech G Pro X Superlight' => 1900000,
        'Razer Viper V2 Pro' => 1800000,
        'Finalmouse Starlight-12' => 3500000,
        'Razer DeathAdder V3 Pro' => 1500000,
        'Zowie EC2-C' => 1200000,
        'Pulsar Xlite V2' => 1000000,
        'Glorious Model O' => 800000
    ],
    'keyboards' => [
        'Logitech G915 Wireless' => 3200000,
        'GMMK Pro' => 4500000,
        'Keychron Q1 Pro' => 3800000,
        'Ducky One 3' => 2200000,
        'Razer BlackWidow V3' => 2500000,
        'Royal Kludge RK84' => 1200000,
        'Keychron K2v2' => 1500000
    ],
    'routers' => [
        'ASUS ROG Rapture GT-AXE16000' => 12900000,
        'NETGEAR Nighthawk RAXE500' => 10500000,
        'TP-Link Archer GX90' => 4500000,
        'ASUS RT-AX86U' => 3900000,
        'TP-Link Archer AX55' => 1500000,
        'ASUS RT-AX58U' => 1800000
    ],
    'monitors' => [
        'ASUS ROG Swift PG32UQX' => 29900000,
        'Samsung Odyssey Neo G8' => 24500000,
        'LG 27GP950-B' => 12900000,
        'ASUS TUF Gaming VG27AQ' => 6500000,
        'Dell UltraSharp U3223QE' => 18500000,
        'LG UltraFine 32EP950' => 32000000
    ],
    'laptops' => [
        'ASUS ROG Zephyrus G14 2024' => 35900000,
        'Razer Blade 16' => 42500000,
        'Lenovo Legion Pro 5' => 25900000,
        'MSI Pulse GL76' => 19500000,
        'Acer Nitro 5' => 15900000,
        'HP Victus 15' => 13500000
    ]
];

// Initialize total variables
$total_pc = 0;
$total_peripherals = 0;
$items_selected = false;
$struk_data = [
    'is_paket' => false,
    'items' => [],
    'total' => 0
];

// Calculate PC Components
$pc_components = [
    'processor' => [
        'type' => 'processor_type',
        'qty' => 'processor_quantity',
        'prices' => $harga_processor,
        'label' => 'Processor'
    ],
    'motherboard' => [
        'type' => 'motherboard_type',
        'qty' => 'motherboard_quantity',
        'prices' => $harga_motherboard,
        'label' => 'Motherboard'
    ],
    'vga' => [
        'type' => 'vga_merk',
        'qty' => 'vga_jumlah',
        'prices' => $harga_vga,
        'label' => 'VGA'
    ],
    'ram' => [
        'type' => 'ram_merk',
        'qty' => 'ram_jumlah',
        'prices' => $harga_ram,
        'label' => 'RAM'
    ],
    'psu' => [
        'type' => 'psu_merk',
        'qty' => 'psu_jumlah',
        'prices' => $harga_psu,
        'label' => 'Power Supply'
    ],
    'storage' => [
        'type' => 'storage_merk',
        'qty' => 'storage_jumlah',
        'prices' => $harga_storage,
        'label' => 'Storage'
    ],
    'casing' => [
        'type' => 'casing_merk',
        'qty' => 'casing_jumlah',
        'prices' => $harga_casing,
        'label' => 'Casing'
    ]
];

// Calculate PC Components
foreach ($pc_components as $component => $details) {
    if (isset($_POST[$details['type']]) && !empty($_POST[$details['type']])) {
        $type = $_POST[$details['type']];
        $qty = (int)$_POST[$details['qty']];
        if (isset($details['prices'][$type]) && $qty > 0) {
            $price = $details['prices'][$type];
            $subtotal = $price * $qty;
            $total_pc += $subtotal;
            $items_selected = true;
            
            $struk_data['items'][] = [
                'nama' => $details['label'],
                'spesifikasi' => $type,
                'jumlah' => $qty,
                'harga' => $subtotal
            ];
        }
    }
}

// Calculate Peripherals
$peripheral_components = [
    'headset' => [
        'type' => 'headset_type',
        'qty' => 'headset_quantity',
        'prices' => $harga_peripherals['headsets'],
        'label' => 'Headset'
    ],
    'mouse' => [
        'type' => 'mouse_type',
        'qty' => 'mouse_quantity',
        'prices' => $harga_peripherals['mice'],
        'label' => 'Mouse'
    ],
    'keyboard' => [
        'type' => 'keyboard_type',
        'qty' => 'keyboard_quantity',
        'prices' => $harga_peripherals['keyboards'],
        'label' => 'Keyboard'
    ],
    'router' => [
        'type' => 'router_type',
        'qty' => 'router_quantity',
        'prices' => $harga_peripherals['routers'],
        'label' => 'Router'
    ],
    'monitor' => [
        'type' => 'monitor_type',
        'qty' => 'monitor_quantity',
        'prices' => $harga_monitors,
        'label' => 'Monitor'
    ],
    'chair' => [
        'type' => 'chair_type',
        'qty' => 'chair_quantity',
        'prices' => $harga_chairs,
        'label' => 'Gaming Chair'
    ],
    'laptop' => [
        'type' => 'laptop_type',
        'qty' => 'laptop_quantity',
        'prices' => $harga_laptops,
        'label' => 'Laptop'
    ]
];

// Calculate Peripherals
foreach ($peripheral_components as $component => $details) {
    if (isset($_POST[$details['type']]) && !empty($_POST[$details['type']])) {
        $type = $_POST[$details['type']];
        $qty = (int)$_POST[$details['qty']];
        if (isset($details['prices'][$type]) && $qty > 0) {
            $price = $details['prices'][$type];
            $subtotal = $price * $qty;
            $total_peripherals += $subtotal;
            $items_selected = true;
            
            $struk_data['items'][] = [
                'nama' => $details['label'],
                'spesifikasi' => $type,
                'jumlah' => $qty,
                'harga' => $subtotal
            ];
        }
    }
}

$grand_total = $total_pc + $total_peripherals;
$struk_data['total'] = $grand_total;

// Store data in session
$_SESSION['struk_data'] = $struk_data;

// Display preview and download button
if ($items_selected) {
    echo "<div class='invoice-container'>";
    echo "<h2>Preview Invoice</h2>";
    
    echo "<table class='invoice-table'>";
    echo "<tr>
            <th>Item</th>
            <th>Spesifikasi</th>
            <th>Jumlah</th>
            <th>Harga</th>
          </tr>";
    
    // Display PC Components
    if ($total_pc > 0) {
        echo "<tr class='section-header'><td colspan='4'>Komponen PC</td></tr>";
        foreach ($struk_data['items'] as $item) {
            if (in_array($item['nama'], array_column($pc_components, 'label'))) {
                echo "<tr>
                    <td>{$item['nama']}</td>
                    <td>{$item['spesifikasi']}</td>
                    <td>{$item['jumlah']}</td>
                    <td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>
                  </tr>";
            }
        }
    }
    
    // Display Peripherals
    if ($total_peripherals > 0) {
        echo "<tr class='section-header'><td colspan='4'>Perlengkapan & Aksesoris</td></tr>";
        foreach ($struk_data['items'] as $item) {
            if (in_array($item['nama'], array_column($peripheral_components, 'label'))) {
                echo "<tr>
                    <td>{$item['nama']}</td>
                    <td>{$item['spesifikasi']}</td>
                    <td>{$item['jumlah']}</td>
                    <td>Rp " . number_format($item['harga'], 0, ',', '.') . "</td>
                  </tr>";
            }
        }
    }
    
    echo "<tr class='total-row'>
            <td colspan='3'>Total Keseluruhan</td>
            <td>Rp " . number_format($grand_total, 0, ',', '.') . "</td>
          </tr>";
    echo "</table>";
    
    echo "<div class='button-container'>";
    echo "<a href='generate_pdf.php' class='download-button'>Download PDF</a>";
    echo "<a href='index.php' class='back-button'>Kembali</a>";
    echo "</div>";
    echo "</div>";
    
} else {
    echo "<div class='invoice-container'>
        <h2>Tidak ada item yang dipilih</h2>
        <p>Silakan pilih minimal satu item untuk melakukan pembelian.</p>
        <a href='index.php' class='back-button'>Kembali</a>
    </div>";
}
?>

<script>
function updateComponents() {
    const platform = document.getElementById('platform_type').value;
    const processorSelect = document.getElementById('processor_type');
    const motherboardSelect = document.getElementById('motherboard_type');
    
    // Reset selections
    processorSelect.value = '';
    motherboardSelect.value = '';
    
    if (platform) {
        // Enable selects
        processorSelect.disabled = false;
        motherboardSelect.disabled = false;
        
        // Hide all options first
        document.querySelectorAll('.intel-option, .amd-option').forEach(opt => {
            opt.style.display = 'none';
        });
        
        // Show relevant options
        document.querySelectorAll('.' + platform + '-option').forEach(opt => {
            opt.style.display = 'block';
        });
    } else {
        // Disable selects if no platform chosen
        processorSelect.disabled = true;
        motherboardSelect.disabled = true;
    }
}

// Add event listeners for quantity inputs
document.getElementById('processor_quantity').addEventListener('change', function() {
    if (this.value > 0 && !document.getElementById('processor_type').value) {
        alert('Silakan pilih processor terlebih dahulu');
        this.value = 0;
    }
});

document.getElementById('motherboard_quantity').addEventListener('change', function() {
    if (this.value > 0 && !document.getElementById('motherboard_type').value) {
        alert('Silakan pilih motherboard terlebih dahulu');
        this.value = 0;
    }
});
</script>

<style>
.invoice-container {
    max-width: 800px;
    margin: 20px auto;
    padding: 20px;
    background: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
    border-radius: 8px;
}

.invoice-table {
    width: 100%;
    border-collapse: collapse;
    margin: 20px 0;
}

.invoice-table th, .invoice-table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: left;
}

.invoice-table th {
    background-color: #f8f9fa;
}

.total-row {
    font-weight: bold;
    background-color: #f8f9fa;
}

.button-container {
    display: flex;
    gap: 10px;
    margin-top: 20px;
    justify-content: center;
}

.download-button, .back-button {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    color: white;
    font-weight: bold;
}

.download-button {
    background-color: #28a745;
}

.back-button {
    background-color: #007bff;
}

.download-button:hover {
    background-color: #218838;
}

.back-button:hover {
    background-color: #0056b3;
}

.section-header {
    background-color: #f0f0f0;
    font-weight: bold;
}

.section-header td {
    padding: 10px;
    font-size: 1.1em;
}

.form-group {
    margin-bottom: 20px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
}

.form-group select {
    width: 100%;
    padding: 8px;
    margin-bottom: 5px;
}

.form-group select:disabled {
    background-color: #f5f5f5;
    cursor: not-allowed;
}

.form-group input[type="number"] {
    width: 100px;
    padding: 8px;
}

.platform-warning {
    color: red;
    font-size: 0.9em;
    margin-top: 5px;
    display: none;
}
</style>

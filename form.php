<!DOCTYPE html>
<html>
<head>
    	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>gaming</title>
	<link rel="icon" href="img/favicon.png">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- animate CSS -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- owl carousel CSS -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="css/all.css">
	<!-- flaticon CSS -->
	<link rel="stylesheet" href="css/flaticon.css">
	<link rel="stylesheet" href="css/themify-icons.css">
	<link rel="stylesheet" href="css/nice-select.css">
	<!-- font awesome CSS -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- swiper CSS -->
	<link rel="stylesheet" href="css/slick.css">
	<!-- style CSS -->
	<link rel="stylesheet" href="css/style.css">
    <title>Form Pembelian Komputer</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .form-group { 
            margin-bottom: 20px;
            padding: 15px;
            background: #f8f9fa;
            border-radius: 5px;
        }
        select, input { 
            padding: 8px; 
            margin: 5px 0;
            width: 300px;
        }
        input[type="number"] {
            width: 100px;
        }
        button { 
            padding: 12px 24px;
            background: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .paket-container { 
            margin-bottom: 30px; 
            padding: 20px;
            background-color: #f5f5f5;
            border-radius: 8px;
        }
        .paket-box {
            border: 1px solid #ddd;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            background-color: white;
        }
        .custom-build {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #ddd;
        }
        h1, h2 { color: #333; }
        .peripherals-section {
            margin-top: 40px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }
        .peripherals-section h2 {
            margin-bottom: 25px;
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }
        optgroup {
            font-weight: bold;
            color: #666;
        }
        optgroup option {
            padding-left: 20px;
            color: #333;
        }
        .form-group select {
            width: 100%;
            max-width: 800px;
        }
        .form-group input[type="number"] {
            width: 100px;
            margin-top: 10px;
        }
        .peripherals-section {
            margin-top: 40px;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
        }

        .peripherals-section h3 {
            margin-bottom: 25px;
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
        }

        .form-group {
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 5px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
            color: #444;
        }

        .form-group select {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        .quantity-input {
            width: 80px !important;
            padding: 6px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        optgroup {
            font-weight: bold;
            color: #666;
        }

        optgroup option {
            padding-left: 20px;
            color: #333;
        }

        /* Tambahan CSS untuk informasi spesifikasi */
        .specs-info {
            background-color: #f8f9fa;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 10px;
            font-size: 0.9em;
            border-left: 4px solid #007bff;
        }

        .socket-info {
            background-color: #e9ecef;
            padding: 10px;
            border-radius: 5px;
            margin-top: 5px;
            font-size: 0.9em;
        }

        select option {
            white-space: pre-wrap;
            padding: 5px;
            font-family: monospace;
            line-height: 1.4;
        }

        .form-group {
            margin-bottom: 30px;
        }

        select {
            font-family: monospace;
        }
    </style>
</head>
<body>
    <h1>Form Pembelian Komputer</h1>

    <!-- Bagian Paket Komputer -->
    <div class="paket-container">
        <h2>Pilih Paket Komputer</h2>
        <form action="proses.php" method="POST">
            <input type="hidden" name="is_paket" value="1">
            <select name="paket_komputer" required>
                <option value="">Pilih Paket</option>
                <option value="gaming_basic">Paket Gaming Basic - Rp 10.500.000
                    (B450M + Ryzen 5 5600X + RTX 3050 + 16GB RAM + 650W PSU + 1TB SSD)</option>
                <option value="gaming_advanced">Paket Gaming Advanced - Rp 25.000.000
                    (X570 + Ryzen 9 5900X + RTX 3080 + 32GB RAM + 850W PSU + 2TB SSD)</option>
                <option value="gaming_ultimate">Paket Gaming Ultimate - Rp 45.000.000
                    (X670E + Ryzen 9 7950X + RTX 4090 + 64GB RAM + 1000W PSU + 4TB SSD)</option>
                <option value="office_basic">Paket Office Basic - Rp 7.500.000
                    (H610M + i3-12100 + 16GB RAM + 500W PSU + 512GB SSD)</option>
                <option value="office_advanced">Paket Office Advanced - Rp 12.500.000
                    (B660M + i5-12600K + 32GB RAM + 650W PSU + 1TB SSD)</option>
                <option value="workstation">Paket Workstation - Rp 35.000.000
                    (Z690 + i9-12900K + RTX 3080 Ti + 64GB RAM + 1000W PSU + 4TB SSD)</option>
            </select>
            <input type="number" name="paket_jumlah" min="1" value="1" placeholder="Jumlah">
            <button class="genric-btn primary" type="submit">Beli Paket</button>
        </form>
    </div>

    <!-- Bagian Custom Build -->
    <div class="custom-build">
        <h2>Custom Build PC & Perlengkapan</h2>
        <form action="proses.php" method="post">
            <!-- Platform Selection -->
            <div class="form-group">
                <label>Pilih Platform:</label>
                <select name="platform_type" id="platform_type" onchange="updateComponents()">
                    <option value="">Pilih Platform</option>
                    <option value="intel">Intel Platform (LGA 1700 Socket)</option>
                    <option value="amd">AMD Platform (AM4/AM5 Socket)</option>
                </select>
                <div class="socket-info">
                    <p class="intel-info" style="display:none;">
                        <strong>Intel LGA 1700:</strong> Mendukung processor Intel Generasi 12 & 13
                    </p>
                    <p class="amd-info" style="display:none;">
                        <strong>AMD AM5:</strong> Mendukung Ryzen 7000 Series<br>
                        <strong>AMD AM4:</strong> Mendukung Ryzen 5000 Series
                    </p>
                </div>
            </div>

            <!-- Processor -->
            <div class="form-group">
                <label>Processor:</label>
                <div class="specs-info">
                    <span class="intel-info" style="display:none;">
                        <strong>Intel Core i9:</strong> Performa Ultra (24-Core/32-Thread)<br>
                        <strong>Intel Core i7:</strong> Performa Tinggi (16-Core/24-Thread)<br>
                        <strong>Intel Core i5:</strong> Performa Menengah (14-Core/20-Thread)<br>
                        <strong>Intel Core i3:</strong> Performa Dasar (4-Core/8-Thread)
                    </span>
                    <span class="amd-info" style="display:none;">
                        <strong>Ryzen 9:</strong> Performa Ultra (16-Core/32-Thread)<br>
                        <strong>Ryzen 7:</strong> Performa Tinggi (8-Core/16-Thread)<br>
                        <strong>Ryzen 5:</strong> Performa Menengah (6-Core/12-Thread)
                    </span>
                </div>
                <select name="processor_type" id="processor_type" disabled>
                    <option value="">Pilih Processor</option>
                    <optgroup label="Intel Processors" class="intel-option" style="display:none;">
                        <option value="Intel Core i9-13900K" data-price="10500000">
                            Intel Core i9-13900K - Rp 10.500.000
                            [Socket: LGA 1700]
                            Base: 3.0GHz | Boost: 5.8GHz
                            Cores: 24-Core (8P+16E) / 32-Thread
                            Cache: 36MB | TDP: 125W
                        </option>
                        <option value="Intel Core i7-13700K" data-price="7800000">
                            Intel Core i7-13700K - Rp 7.800.000
                            [Socket: LGA 1700]
                            Base: 3.4GHz | Boost: 5.4GHz
                            Cores: 16-Core (8P+8E) / 24-Thread
                            Cache: 30MB | TDP: 125W
                        </option>
                        <option value="Intel Core i5-13600K" data-price="5500000">
                            Intel Core i5-13600K - Rp 5.500.000
                            [Socket: LGA 1700]
                            Base: 3.5GHz | Boost: 5.1GHz
                            Cores: 14-Core (6P+8E) / 20-Thread
                            Cache: 24MB | TDP: 125W
                        </option>
                        <option value="Intel Core i3-13100" data-price="2300000">
                            Intel Core i3-13100 - Rp 2.300.000
                            [Socket: LGA 1700]
                            Base: 3.4GHz | Boost: 4.5GHz
                            Cores: 4-Core / 8-Thread
                            Cache: 12MB | TDP: 60W
                        </option>
                    </optgroup>
                    <optgroup label="AMD Processors" class="amd-option" style="display:none;">
                        <option value="AMD Ryzen 9 7950X" data-price="11500000">
                            AMD Ryzen 9 7950X - Rp 11.500.000
                            [Socket: AM5]
                            Base: 4.5GHz | Boost: 5.7GHz
                            Cores: 16-Core / 32-Thread
                            Cache: 64MB | TDP: 170W
                        </option>
                        <option value="AMD Ryzen 7 7700X" data-price="7200000">
                            AMD Ryzen 7 7700X - Rp 7.200.000
                            [Socket: AM5]
                            Base: 4.5GHz | Boost: 5.4GHz
                            Cores: 8-Core / 16-Thread
                            Cache: 32MB | TDP: 105W
                        </option>
                        <option value="AMD Ryzen 5 7600X" data-price="4800000">
                            AMD Ryzen 5 7600X - Rp 4.800.000
                            [Socket: AM5]
                            Base: 4.7GHz | Boost: 5.3GHz
                            Cores: 6-Core / 12-Thread
                            Cache: 32MB | TDP: 105W
                        </option>
                        <option value="AMD Ryzen 5 5600X" data-price="3500000">
                            AMD Ryzen 5 5600X - Rp 3.500.000
                            [Socket: AM4]
                            Base: 3.7GHz | Boost: 4.6GHz
                            Cores: 6-Core / 12-Thread
                            Cache: 32MB | TDP: 65W
                        </option>
                    </optgroup>
                </select>
                <input type="number" name="processor_quantity" id="processor_quantity" min="0" value="0">
            </div>

            <!-- Motherboard -->
            <div class="form-group">
                <label>Motherboard:</label>
                <div class="specs-info">
                    <span class="intel-info" style="display:none;">
                        <strong>Z790:</strong> High-End, Full Feature Set<br>
                        <strong>Z690:</strong> High Performance<br>
                        <strong>B660:</strong> Mid-Range<br>
                        <strong>H610:</strong> Entry Level
                    </span>
                    <span class="amd-info" style="display:none;">
                        <strong>X670E:</strong> Extreme Performance (AM5)<br>
                        <strong>X570:</strong> High Performance (AM4)<br>
                        <strong>B550:</strong> Mid-Range (AM4)<br>
                        <strong>B450:</strong> Entry Level (AM4)
                    </span>
                </div>
                <select name="motherboard_type" id="motherboard_type" disabled>
                    <option value="">Pilih Motherboard</option>
                    <optgroup label="Intel Motherboards" class="intel-option" style="display:none;">
                        <option value="ASUS ROG MAXIMUS Z790" data-price="12500000">
                            ASUS ROG MAXIMUS Z790 - Rp 12.500.000
                            [Socket: LGA 1700]
                            Memory: DDR5-6400+ Support
                            PCIe: Gen 5.0 x16
                            Network: WiFi 6E + 10GbE LAN
                            USB: Thunderbolt 4
                        </option>
                        <option value="MSI MPG Z690" data-price="5200000">
                            MSI MPG Z690 - Rp 5.200.000
                            [Socket: LGA 1700]
                            Memory: DDR5-6200 Support
                            PCIe: Gen 5.0 x16
                            Network: WiFi 6 + 2.5GbE LAN
                            USB: 3.2 Gen2x2
                        </option>
                        <option value="GIGABYTE B660M" data-price="2300000">
                            GIGABYTE B660M - Rp 2.300.000
                            [Socket: LGA 1700]
                            Memory: DDR4-4800 Support
                            PCIe: Gen 4.0 x16
                            Network: 2.5GbE LAN
                            USB: 3.2 Gen2
                        </option>
                        <option value="ASRock H610M" data-price="1500000">
                            ASRock H610M - Rp 1.500.000
                            [Socket: LGA 1700]
                            Memory: DDR4-3200 Support
                            PCIe: Gen 4.0 x16
                            Network: GbE LAN
                            USB: 3.2 Gen1
                        </option>
                    </optgroup>
                    <optgroup label="AMD Motherboards" class="amd-option" style="display:none;">
                        <option value="ASUS ROG CROSSHAIR X670E" data-price="11800000">
                            ASUS ROG CROSSHAIR X670E - Rp 11.800.000
                            [Socket: AM5]
                            Memory: DDR5-6400+ Support
                            PCIe: Gen 5.0 x16
                            Network: WiFi 6E + 10GbE LAN
                            USB: USB4 Type-C
                        </option>
                        <option value="MSI MPG B550" data-price="3200000">
                            MSI MPG B550 - Rp 3.200.000
                            [Socket: AM4]
                            Memory: DDR4-5100 Support
                            PCIe: Gen 4.0 x16
                            Network: WiFi 6 + 2.5GbE LAN
                            USB: 3.2 Gen2
                        </option>
                        <option value="GIGABYTE X570S" data-price="4500000">
                            GIGABYTE X570S - Rp 4.500.000
                            [Socket: AM4]
                            Memory: DDR4-5200 Support
                            PCIe: Gen 4.0 x16
                            Network: WiFi 6 + 2.5GbE LAN
                            USB: 3.2 Gen2x2
                        </option>
                        <option value="ASRock B450M" data-price="1800000">
                            ASRock B450M - Rp 1.800.000
                            [Socket: AM4]
                            Memory: DDR4-3200 Support
                            PCIe: Gen 3.0 x16
                            Network: GbE LAN
                            USB: 3.2 Gen1
                        </option>
                    </optgroup>
                </select>
                <input type="number" name="motherboard_quantity" id="motherboard_quantity" min="0" value="0">
            </div>

            <div class="form-group">
                <label>VGA:</label><br>
                <select name="vga_merk">
                    <option value="">Pilih VGA</option>
                    <!-- NVIDIA -->
                    <optgroup label="NVIDIA RTX 40 Series">
                        <option value="NVIDIA RTX 4090" data-price="28500000">NVIDIA RTX 4090 24GB GDDR6X - Rp 28.500.000
                            (Base:2.23GHz, Boost:2.52GHz, 16384 CUDA Cores)</option>
                        <option value="NVIDIA RTX 4080">NVIDIA RTX 4080 16GB GDDR6X - Rp 19.800.000
                            (Base:2.21GHz, Boost:2.51GHz, 9728 CUDA Cores)</option>
                        <option value="NVIDIA RTX 4070 Ti">NVIDIA RTX 4070 Ti 12GB GDDR6X - Rp 14.500.000
                            (Base:2.31GHz, Boost:2.61GHz, 7680 CUDA Cores)</option>
                    </optgroup>
                    <optgroup label="NVIDIA RTX 30 Series">
                        <option value="NVIDIA RTX 3080">NVIDIA RTX 3080 10GB GDDR6X - Rp 11.500.000
                            (Base:1.44GHz, Boost:1.71GHz, 8704 CUDA Cores)</option>
                        <option value="NVIDIA RTX 3070">NVIDIA RTX 3070 8GB GDDR6 - Rp 8.500.000
                            (Base:1.50GHz, Boost:1.73GHz, 5888 CUDA Cores)</option>
                        <option value="NVIDIA RTX 3060">NVIDIA RTX 3060 12GB GDDR6 - Rp 5.500.000
                            (Base:1.32GHz, Boost:1.78GHz, 3584 CUDA Cores)</option>
                    </optgroup>
                    <!-- AMD -->
                    <optgroup label="AMD RX 7000 Series">
                        <option value="AMD RX 7900 XTX">AMD RX 7900 XTX 24GB GDDR6 - Rp 20.500.000
                            (Game:2.3GHz, Boost:2.5GHz, 96 Compute Units)</option>
                        <option value="AMD RX 7900 XT">AMD RX 7900 XT 20GB GDDR6 - Rp 17.500.000
                            (Game:2.0GHz, Boost:2.4GHz, 84 Compute Units)</option>
                    </optgroup>
                    <optgroup label="AMD RX 6000 Series">
                        <option value="AMD RX 6800 XT">AMD RX 6800 XT 16GB GDDR6 - Rp 11.000.000
                            (Game:2.0GHz, Boost:2.25GHz, 72 Compute Units)</option>
                        <option value="AMD RX 6700 XT">AMD RX 6700 XT 12GB GDDR6 - Rp 7.500.000
                            (Game:2.3GHz, Boost:2.58GHz, 40 Compute Units)</option>
                    </optgroup>
                </select>
                <input type="number" name="vga_jumlah" min="0" value="0" placeholder="Jumlah">
            </div>

            <div class="form-group">
                <label>RAM:</label><br>
                <select name="ram_merk">
                    <option value="">Pilih RAM</option>
                    <optgroup label="DDR5 Memory">
                        <option value="G.SKILL Trident Z5 RGB 32GB" data-price="3800000">G.SKILL Trident Z5 RGB 32GB (2x16GB) - Rp 3.800.000
                            (DDR5-6000MHz, CL30-38-38-96, 1.35V)</option>
                        <option value="Corsair Dominator 32GB">Corsair Dominator 32GB (2x16GB) - Rp 3.500.000
                            (DDR5-5200MHz, CL38-38-38-84, 1.25V)</option>
                    </optgroup>
                    <optgroup label="DDR4 Memory">
                        <option value="G.SKILL Trident Z RGB 32GB">G.SKILL Trident Z RGB 32GB (2x16GB) - Rp 2.500.000
                            (DDR4-3600MHz, CL16-19-19-39, 1.35V)</option>
                        <option value="Corsair Vengeance RGB 32GB">Corsair Vengeance RGB 32GB (2x16GB) - Rp 2.200.000
                            (DDR4-3200MHz, CL16-18-18-36, 1.35V)</option>
                        <option value="G.SKILL Ripjaws V 16GB">G.SKILL Ripjaws V 16GB (2x8GB) - Rp 1.200.000
                            (DDR4-3200MHz, CL16-18-18-38, 1.35V)</option>
                        <option value="Kingston Fury 16GB">Kingston Fury 16GB (2x8GB) - Rp 1.100.000
                            (DDR4-3200MHz, CL16-18-18-36, 1.35V)</option>
                    </optgroup>
                </select>
                <input type="number" name="ram_jumlah" min="0" value="0" placeholder="Jumlah">
            </div>

            <div class="form-group">
                <label>PSU:</label><br>
                <select name="psu_merk">
                    <option value="">Pilih PSU</option>
                    <option value="Corsair AX1600i">Corsair AX1600i 1600W Titanium - Rp 7.500.000</option>
                    <option value="be quiet! Dark Power Pro 12">be quiet! Dark Power Pro 12 1200W Titanium - Rp 5.800.000</option>
                    <option value="Seasonic PRIME TX">Seasonic PRIME TX-1000 1000W Titanium - Rp 4.800.000</option>
                    <option value="Corsair RM850x">Corsair RM850x 850W Gold - Rp 2.500.000</option>
                    <option value="be quiet! Straight Power 11">be quiet! Straight Power 11 750W Gold - Rp 2.200.000</option>
                    <option value="Seasonic Focus GX">Seasonic Focus GX-650 650W Gold - Rp 1.500.000</option>
                </select>
                <input type="number" name="psu_jumlah" min="0" value="0" placeholder="Jumlah">
            </div>

            <div class="form-group">
                <label>Storage:</label><br>
                <select name="storage_merk">
                    <option value="">Pilih Storage</option>
                    <!-- SSD NVMe -->
                    <option value="Samsung 990 PRO 2TB">Samsung 990 PRO 2TB NVMe - Rp 4.800.000</option>
                    <option value="WD Black SN850X 2TB">WD Black SN850X 2TB NVMe - Rp 4.200.000</option>
                    <option value="Samsung 970 EVO Plus 1TB">Samsung 970 EVO Plus 1TB NVMe - Rp 1.800.000</option>
                    <!-- SSD SATA -->
                    <option value="Samsung 870 EVO 1TB">Samsung 870 EVO 1TB SATA - Rp 1.500.000</option>
                    <option value="Crucial MX500 1TB">Crucial MX500 1TB SATA - Rp 1.300.000</option>
                    <!-- HDD -->
                    <option value="Seagate Barracuda 4TB">Seagate Barracuda 4TB - Rp 1.400.000</option>
                    <option value="WD Blue 2TB">WD Blue 2TB - Rp 800.000</option>
                </select>
                <input type="number" name="storage_jumlah" min="0" value="0" placeholder="Jumlah">
            </div>

            <div class="form-group">
                <label>Casing:</label><br>
                <select name="casing_merk">
                    <option value="">Pilih Casing</option>
                    
                    <!-- Premium Cases -->
                    <optgroup label="Premium Cases">
                        <option value="Lian Li PC-O11 Dynamic XL">Lian Li PC-O11 Dynamic XL - Rp 4.200.000
                            (Full Tower, Tempered Glass, E-ATX)</option>
                        <option value="be quiet! Dark Base Pro 900">be quiet! Dark Base Pro 900 - Rp 4.500.000
                            (Full Tower, Modular Design, E-ATX)</option>
                        <option value="Lian Li PC-O11 Dynamic">Lian Li PC-O11 Dynamic - Rp 2.800.000
                            (Mid Tower, Tempered Glass, ATX)</option>
                    </optgroup>
                    
                    <!-- High Airflow Cases -->
                    <optgroup label="High Airflow Cases">
                        <option value="Corsair 5000D Airflow">Corsair 5000D Airflow - Rp 2.900.000
                            (Mid Tower, Mesh Front, ATX)</option>
                        <option value="Phanteks Eclipse P500A">Phanteks Eclipse P500A - Rp 2.200.000
                            (Mid Tower, DRGB, ATX)</option>
                        <option value="Fractal Design Meshify 2">Fractal Design Meshify 2 - Rp 2.600.000
                            (Mid Tower, Mesh Front, ATX)</option>
                    </optgroup>
                    
                    <!-- Mid-Range Cases -->
                    <optgroup label="Mid-Range Cases">
                        <option value="NZXT H510 Elite">NZXT H510 Elite - Rp 2.500.000
                            (Mid Tower, Tempered Glass, ATX)</option>
                        <option value="Corsair 4000D Airflow">Corsair 4000D Airflow - Rp 1.600.000
                            (Mid Tower, Mesh Front, ATX)</option>
                        <option value="be quiet! Pure Base 500DX">be quiet! Pure Base 500DX - Rp 1.700.000
                            (Mid Tower, ARGB, ATX)</option>
                    </optgroup>
                    
                    <!-- Budget-Friendly Cases -->
                    <optgroup label="Budget-Friendly Cases">
                        <option value="Phanteks Eclipse P400A">Phanteks Eclipse P400A - Rp 1.400.000
                            (Mid Tower, Mesh Front, ATX)</option>
                        <option value="Fractal Design Meshify C">Fractal Design Meshify C - Rp 1.500.000
                            (Mid Tower, Mesh Front, ATX)</option>
                        <option value="Cooler Master TD500 Mesh">Cooler Master TD500 Mesh - Rp 1.300.000
                            (Mid Tower, Mesh Front, ATX)</option>
                    </optgroup>
                </select>
                <input type="number" name="casing_jumlah" min="0" value="0" placeholder="Jumlah">
            </div>

            <!-- Peripherals Section -->
            <div class="peripherals-section">
                <h3>Perlengkapan & Aksesoris</h3>
                
                <!-- Chair -->
                <div class="form-group">
                    <label>Kursi Gaming:</label>
                    <select name="chair_type" id="chair_type">
                        <option value="">Pilih Kursi Gaming</option>
                        
                        <!-- Premium Gaming Chairs -->
                        <optgroup label="Premium Gaming Chairs">
                            <option value="Herman Miller Aeron" data-price="18000000">
                                Herman Miller Aeron - Rp 18.000.000
                            </option>
                        </optgroup>

                        <!-- High-End Gaming Chairs -->
                        <optgroup label="High-End Gaming Chairs">
                            <option value="Secretlab TITAN Evo 2022" data-price="8500000">
                                Secretlab TITAN Evo 2022 - Rp 8.500.000
                            </option>
                            <option value="DXRacer Master Series" data-price="7200000">
                                DXRacer Master Series - Rp 7.200.000
                            </option>
                        </optgroup>

                        <!-- Mid-Range Gaming Chairs -->
                        <optgroup label="Mid-Range Gaming Chairs">
                            <option value="Fantech Alpha GC-283" data-price="2300000">
                            Fantech Alpha GC-283 - Rp 2.300.000
                            </option>
                            <option value="Steelcase Gesture" data-price="18000000">
                                Steelcase Gesture - Rp18.000.000
                            </option>
                            <option value="ErgoHuman V2" data-price="8900000">
                            ErgoHuman V2- Rp 8.900.000
                            </option>
                        </optgroup>

                        <!-- Entry-Level Gaming Chairs -->
                        <optgroup label="Entry-Level Gaming Chairs">
                            <option value="Fantech Alpha GC-283" data-price="2200000">
                                Fantech Alpha GC-283 - Rp 2.200.000
                            </option>
                            <option value="Rexus RGC 111" data-price="1800000">
                                Rexus RGC 111 - Rp 1.800.000
                            </option>
                        </optgroup>
                    </select>
                    <input type="number" 
                           name="chair_quantity" 
                           id="chair_quantity"
                           min="0" 
                           value="0" 
                           placeholder="Jumlah">
                </div>

                <!-- Monitor -->
                <div class="form-group">
                    <label>Monitor:</label>
                    <select name="monitor_type" id="monitor_type">
                        <option value="">Pilih Monitor</option>
                        <option value="ASUS ROG Swift PG32UQX" data-price="29900000">ASUS ROG Swift PG32UQX - Rp 29.900.000</option>
                        <option value="Samsung Odyssey G7" data-price="12500000">Samsung Odyssey G7 - Rp 12.500.000</option>
                        <option value="LG 27GP850-B" data-price="7800000">LG 27GP850-B - Rp 7.800.000</option>
                        <option value="Dell UltraSharp U3223QE" data-price="18500000">Dell UltraSharp U3223QE - Rp 18.500.000</option>
                        <option value="BenQ PD3200U" data-price="11200000">BenQ PD3200U - Rp 11.200.000</option>
                    </select>
                    <input type="number" name="monitor_quantity" id="monitor_quantity" min="0" value="0">
                </div>

                <!-- Headset -->
                <div class="form-group">
                    <label>Headset:</label>
                    <select name="headset_type" id="headset_type">
                        <option value="">Pilih Headset</option>
                        <optgroup label="Premium Gaming Headsets">
                            <option value="SteelSeries Arctis Nova Pro" data-price="4900000">SteelSeries Arctis Nova Pro Wireless - Rp 4.900.000
                                (Active Noise Canceling, Dual Battery System)</option>
                            <option value="Astro A50 Gen 4" data-price="4200000">Astro A50 Gen 4 Wireless - Rp 4.200.000
                                (Dolby Audio, Base Station with MixAmp)</option>
                            <option value="Logitech G Pro X Wireless" data-price="2800000">Logitech G Pro X Wireless - Rp 2.800.000
                                (Blue VO!CE Technology, DTS Headphone:X 2.0)</option>
                        </optgroup>
                        <optgroup label="Mid-Range Gaming Headsets">
                            <option value="Razer BlackShark V2 Pro" data-price="2500000">Razer BlackShark V2 Pro - Rp 2.500.000
                                (TriForce Titanium Drivers, HyperClear Mic)</option>
                            <option value="HyperX Cloud Alpha Wireless" data-price="2300000">HyperX Cloud Alpha Wireless - Rp 2.300.000
                                (300-hour Battery Life, DTS Headphone:X)</option>
                        </optgroup>
                        <optgroup label="Budget Gaming Headsets">
                            <option value="HyperX Cloud Alpha" data-price="1500000">HyperX Cloud Alpha - Rp 1.500.000
                                (Dual Chamber Drivers, Memory Foam Earpads)</option>
                            <option value="Razer BlackShark V2 X" data-price="900000">Razer BlackShark V2 X - Rp 900.000
                                (TriForce 50mm Drivers, Memory Foam Cushions)</option>
                        </optgroup>
                    </select>
                    <input type="number" name="headset_quantity" min="0" value="0">
                </div>

                <!-- Mouse -->
                <div class="form-group">
                    <label>Mouse:</label>
                    <select name="mouse_type" id="mouse_type">
                        <option value="">Pilih Mouse</option>
                        <optgroup label="Premium Gaming Mouse">
                            <option value="Logitech G Pro X Superlight" data-price="1900000">Logitech G Pro X Superlight - Rp 1.900.000
                                (63g, HERO 25K Sensor, 70hr Battery)</option>
                            <option value="Razer Viper V2 Pro" data-price="1800000">Razer Viper V2 Pro - Rp 1.800.000
                                (58g, Focus Pro 30K Sensor, 80hr Battery)</option>
                            <option value="Finalmouse Starlight-12" data-price="3500000">Finalmouse Starlight-12 - Rp 3.500.000
                                (42g, Magnesium Alloy, 20K DPI)</option>
                        </optgroup>
                        <optgroup label="Mid-Range Gaming Mouse">
                            <option value="Razer DeathAdder V3 Pro" data-price="1500000">Razer DeathAdder V3 Pro - Rp 1.500.000
                                (63g, Focus Pro 30K, Ergonomic)</option>
                            <option value="Zowie EC2-C" data-price="1200000">Zowie EC2-C - Rp 1.200.000
                                (Ergonomic Shape, 3360 Sensor)</option>
                        </optgroup>
                        <optgroup label="Budget Gaming Mouse">
                            <option value="Pulsar Xlite V2" data-price="1000000">Pulsar Xlite V2 - Rp 1.000.000
                                (59g, PAW 3370 Sensor)</option>
                            <option value="Glorious Model O" data-price="800000">Glorious Model O - Rp 800.000
                                (67g, Honeycomb Design, RGB)</option>
                        </optgroup>
                    </select>
                    <input type="number" name="mouse_quantity" min="0" value="0">
                </div>

                <!-- Keyboard -->
                <div class="form-group">
                    <label>Keyboard:</label>
                    <select name="keyboard_type" id="keyboard_type">
                        <option value="">Pilih Keyboard</option>
                        <optgroup label="Premium Mechanical Keyboards">
                            <option value="Logitech G915 Wireless" data-price="3200000">Logitech G915 Wireless - Rp 3.200.000
                                (Low Profile GL Switches, Aircraft-Grade Aluminum)</option>
                            <option value="GMMK Pro" data-price="4500000">GMMK Pro - Rp 4.500.000
                                (Modular Design, Aluminum Case, Rotary Knob)</option>
                            <option value="Keychron Q1 Pro" data-price="3800000">Keychron Q1 Pro - Rp 3.800.000
                                (QMK/VIA Compatible, Wireless, Aluminum)</option>
                        </optgroup>
                        <optgroup label="Mid-Range Mechanical Keyboards">
                            <option value="Ducky One 3" data-price="2200000">Ducky One 3 - Rp 2.200.000
                                (Cherry MX Switches, Hot-Swappable PCB)</option>
                            <option value="Razer BlackWidow V3" data-price="2500000">Razer BlackWidow V3 - Rp 2.500.000
                                (Razer Green Switches, Doubleshot ABS)</option>
                        </optgroup>
                        <optgroup label="Budget Mechanical Keyboards">
                            <option value="Royal Kludge RK84" data-price="1200000">Royal Kludge RK84 - Rp 1.200.000
                                (Hot-Swappable, Wireless/Wired)</option>
                            <option value="Keychron K2v2" data-price="1500000">Keychron K2v2 - Rp 1.500.000
                                (Gateron Switches, Wireless/Wired)</option>
                        </optgroup>
                    </select>
                    <input type="number" name="keyboard_quantity" min="0" value="0">
                </div>

                <!-- WiFi Router -->
                <div class="form-group">
                    <label>WiFi Router:</label>
                    <select name="router_type" id="router_type">
                        <option value="">Pilih WiFi Router</option>
                        <optgroup label="Premium Gaming Routers">
                            <option value="ASUS ROG Rapture GT-AXE16000" data-price="12900000">ASUS ROG Rapture GT-AXE16000 - Rp 12.900.000
                                (Quad-Band WiFi 6E, 18Gbps Total Speed)</option>
                            <option value="NETGEAR Nighthawk RAXE500" data-price="10500000">NETGEAR Nighthawk RAXE500 - Rp 10.500.000
                                (Tri-Band WiFi 6E, 10.8Gbps)</option>
                        </optgroup>
                        <optgroup label="Mid-Range Gaming Routers">
                            <option value="TP-Link Archer GX90" data-price="4500000">TP-Link Archer GX90 - Rp 4.500.000
                                (Tri-Band WiFi 6, Gaming Band, 6.6Gbps)</option>
                            <option value="ASUS RT-AX86U" data-price="3900000">ASUS RT-AX86U - Rp 3.900.000
                                (Dual-Band WiFi 6, 5.7Gbps, Gaming Port)</option>
                        </optgroup>
                        <optgroup label="Budget Gaming Routers">
                            <option value="TP-Link Archer AX55" data-price="1500000">TP-Link Archer AX55 - Rp 1.500.000
                                (Dual-Band WiFi 6, 2.4Gbps)</option>
                            <option value="ASUS RT-AX58U" data-price="1800000">ASUS RT-AX58U - Rp 1.800.000
                                (Dual-Band WiFi 6, 2.4Gbps, AiMesh)</option>
                        </optgroup>
                    </select>
                    <input type="number"  name="router_quantity" min="0" value="0">
                </div>
            </div>

            <!-- Single submit button for all items -->
            <button type="submit" class="genric-btn primary">Hitung Total Keseluruhan</button>
        </form>
    </div>

    <!-- Add this JavaScript code -->
    <script>
    const amdProcessors = {
        'AMD Ryzen 9 7950X': {
            price: 11500000,
            specs: '16-Core/32-Thread, Base:4.5GHz, Boost:5.7GHz, 64MB Cache'
        },
        'AMD Ryzen 7 7700X': {
            price: 7200000,
            specs: '8-Core/16-Thread, Base:4.5GHz, Boost:5.4GHz, 32MB Cache'
        },
        'AMD Ryzen 5 7600X': {
            price: 4800000,
            specs: '6-Core/12-Thread, Base:4.7GHz, Boost:5.3GHz, 32MB Cache'
        },
        'AMD Ryzen 5 5600X': {
            price: 3500000,
            specs: '6-Core/12-Thread, Base:3.7GHz, Boost:4.6GHz, 32MB Cache'
        }
    };

    const intelProcessors = {
        'Intel Core i9-13900K': {
            price: 10500000,
            specs: '24-Core(8P+16E)/32-Thread, P-Core up to 5.8GHz, 36MB Cache'
        },
        'Intel Core i7-13700K': {
            price: 7800000,
            specs: '16-Core(8P+8E)/24-Thread, P-Core up to 5.4GHz, 30MB Cache'
        },
        'Intel Core i5-13600K': {
            price: 5500000,
            specs: '14-Core(6P+8E)/20-Thread, P-Core up to 5.1GHz, 24MB Cache'
        },
        'Intel Core i3-13100': {
            price: 2300000,
            specs: '4-Core/8-Thread, Base:3.4GHz, Boost:4.5GHz, 12MB Cache'
        }
    };

    const amdMotherboards = {
        'ASUS ROG CROSSHAIR X670E': 11800000,
        'MSI MPG B550': 3200000,
        'GIGABYTE X570S': 4500000,
        'ASRock B450M': 1800000
    };

    const intelMotherboards = {
        'ASUS ROG MAXIMUS Z790': 12500000,
        'MSI MPG Z690': 5200000,
        'GIGABYTE B660M': 2300000,
        'ASRock H610M': 1500000
    };

    function checkCompatibility() {
        const processor = document.getElementById('processor_type').value;
        const motherboard = document.getElementById('motherboard_type').value;
        
        if (processor && motherboard) {
            // Untuk Intel
            if (processor.includes('Intel')) {
                // Semua processor Intel yang ditampilkan adalah LGA 1700
                if (!motherboard.includes('Z790') && 
                    !motherboard.includes('Z690') && 
                    !motherboard.includes('B660') && 
                    !motherboard.includes('H610')) {
                    alert('Peringatan: Socket processor dan motherboard tidak kompatibel!\n' +
                          'Processor Intel 12th/13th Gen membutuhkan motherboard Socket LGA 1700\n' +
                          '(Z790, Z690, B660, atau H610)');
                    return false;
                }
            }
            // Untuk AMD
            if (processor.includes('AMD')) {
                // Ryzen 7000 series (AM5)
                if ((processor.includes('7950X') || processor.includes('7700X') || processor.includes('7600X'))) {
                    if (!motherboard.includes('X670E')) {
                        alert('Peringatan: Socket processor dan motherboard tidak kompatibel!\n' +
                              'Processor AMD Ryzen 7000 series membutuhkan motherboard Socket AM5');
                        return false;
                    }
                }
                // Ryzen 5000 series (AM4)
                if (processor.includes('5600X')) {
                    if (!motherboard.includes('B550') && 
                        !motherboard.includes('X570') && 
                        !motherboard.includes('B450')) {
                        alert('Peringatan: Socket processor dan motherboard tidak kompatibel!\n' +
                              'Processor AMD Ryzen 5000 series membutuhkan motherboard Socket AM4');
                        return false;
                    }
                }
            }
        }
        return true;
    }

    function updateComponents() {
        const platform = document.getElementById('platform_type').value;
        const processorSelect = document.getElementById('processor_type');
        const motherboardSelect = document.getElementById('motherboard_type');
        
        // Reset selections and quantities
        processorSelect.value = '';
        motherboardSelect.value = '';
        document.getElementById('processor_quantity').value = 0;
        document.getElementById('motherboard_quantity').value = 0;
        
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

    // Add event listeners
    document.getElementById('platform_type').addEventListener('change', updateComponents);

    document.getElementById('processor_type').addEventListener('change', function() {
        if (this.value) {
            document.getElementById('processor_quantity').value = 1;
        } else {
            document.getElementById('processor_quantity').value = 0;
        }
        checkCompatibility();
    });

    document.getElementById('motherboard_type').addEventListener('change', function() {
        if (this.value) {
            document.getElementById('motherboard_quantity').value = 1;
        } else {
            document.getElementById('motherboard_quantity').value = 0;
        }
        checkCompatibility();
    });

    // Quantity validation
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

    // Initialize
    document.addEventListener('DOMContentLoaded', function() {
        updateComponents();
    });

    // Optional: Add some styling
    document.addEventListener('DOMContentLoaded', function() {
        const style = document.createElement('style');
        style.textContent = `
            select:disabled {
                background-color: #f5f5f5;
                cursor: not-allowed;
            }
            .form-group {
                margin-bottom: 15px;
            }
            select {
                padding: 8px;
                border-radius: 4px;
                border: 1px solid #ddd;
                width: 300px;
            }
            select:not(:disabled) {
                border-color: #007bff;
            }
        `;
        document.head.appendChild(style);
    });
    </script>
</body>
</html> 
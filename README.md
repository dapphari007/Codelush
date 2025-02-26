# 🚀 Codelush

Codelush is a **web-based platform** designed to provide an interactive and engaging experience for users. It is deployed on **Cloudflare Pages** and uses a **database hosted on InfinityFree**. Due to the limitations of InfinityFree, the database operates over **HTTP** instead of **HTTPS**.

---

## 🌍 Live Deployment  
🔗 **Access the deployed site:** [Codelush](https://codelush.pages.dev)

⚠ **Important Note:**  
Since the database is hosted on **InfinityFree**, it operates over **HTTP** instead of **HTTPS**. You may need to **disable browser protection** to view insecure content.

---

## 📌 Features  
- 🌐 **Cloudflare Pages Deployment:** Fast and secure static site hosting.  
- 💾 **InfinityFree Database:** Free database hosting for backend data storage.  
- 🛠 **Responsive Design:** Works seamlessly on all devices.  
- 🔍 **Interactive UI:** User-friendly and intuitive interface.  

---

## 🏗️ Tech Stack  
| **Technology**       | **Usage**                        |
|----------------------|----------------------------------|
| **HTML, CSS, JS**    | Frontend development             |
| **PHP**              | Backend logic and server-side scripting |
| **MySQL**            | Database management              |
| **Cloudflare Pages** | Frontend hosting                 |
| **InfinityFree**     | Database hosting                 |

---

## 📥 Installation & Setup  

To run this project locally, follow these steps:

### 1️⃣ Clone the Repository  
        git clone https://github.com/dapphari007/Codelush.git
        cd Codelush

### 2️⃣ Set Up a Local Server
This project uses PHP and MySQL, so you need a local server like XAMPP or MAMP.
- XAMPP Users:
  1. Move the project folder to the htdocs directory.
  2. Start Apache and MySQL from the XAMPP control panel.

- MAMP Users:
  1. Move the project folder to the htdocs directory.
  2. Start the MAMP server.

### 3️⃣ Configure the Database  
1. Open **phpMyAdmin** (usually accessible at `http://localhost/phpmyadmin`).  
2. Create a new database (e.g., `codelush`).  
3. Import the provided SQL file (if available) into the database.  
4. Update the database connection settings in the `config.php` file (or equivalent).

### 4️⃣ Run the Project  
Open your browser and navigate to:  

    http://localhost/Codelush

## 🎯 How to Use  
1. Visit the live site: [Codelush](https://codelush.pages.dev).  
2. Interact with the platform and explore its features.  
3. If you encounter security warnings due to HTTP content, disable browser protection for insecure content.  

## 📌 Known Issues  
- The database is hosted on **InfinityFree**, which does not support **HTTPS**.  
- Some browsers may block mixed content (HTTP resources on an HTTPS site).  
- **Cloudflare Pages** only supports static site hosting, so a separate backend host is required.  

## ✅ Possible Workarounds  
- Migrate the database to a platform that supports **HTTPS** (e.g., **Firebase**, **Supabase**, or **Render**).  
- Use a backend server with **HTTPS** support (e.g., **Vercel** with **MongoDB**).  

## 🛠 Contributing  
Contributions are welcome! To contribute:  
1. Fork the repository.  
2. Create a new branch:  
   ```bash
   git checkout -b feature/your-feature-name
3. Make your changes and commit them:
    ```bash
    git commit -m "Add your commit message here"
4. Push your changes to your forked repository:
    ```bash
    git push origin feature/your-feature-name
5. Open a Pull Request and describe your changes.

## 📬 Contact

For any issues, suggestions, or contributions:

🔗 **GitHub Repository:** [Codelush](https://github.com/dapphari007/Codelush)  
✉️ **Reach out via GitHub Issues**

---

💡 **If you found this project useful, consider giving it a ⭐ on GitHub!**
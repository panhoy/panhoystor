// Toggle Dark Mode
document.addEventListener("DOMContentLoaded", () => {
    const body = document.body;
    const darkModeToggle = document.createElement("button");
    darkModeToggle.textContent = "Toggle Dark Mode";
    darkModeToggle.style.position = "fixed";
    darkModeToggle.style.bottom = "10px";
    darkModeToggle.style.right = "10px";
    darkModeToggle.style.padding = "10px 15px";
    darkModeToggle.style.backgroundColor = "#333";
    darkModeToggle.style.color = "#fff";
    darkModeToggle.style.border = "none";
    darkModeToggle.style.cursor = "pointer";
    darkModeToggle.style.borderRadius = "5px";

    darkModeToggle.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
        darkModeToggle.textContent = body.classList.contains("dark-mode") ? "Light Mode" : "Dark Mode";
    });

    document.body.appendChild(darkModeToggle);
});

// Animate Social Icons Hover Effect
const socialIcons = document.querySelectorAll(".contact1 a");
socialIcons.forEach(icon => {
    icon.addEventListener("mouseover", () => {
        icon.style.transform = "scale(1.2)";
        icon.style.transition = "transform 0.2s";
    });

    icon.addEventListener("mouseout", () => {
        icon.style.transform = "scale(1)";
    });
});

// Scroll to Sections (if needed)
document.querySelectorAll(".download a").forEach(anchor => {
    anchor.addEventListener("click", e => {
        e.preventDefault();
        const targetId = anchor.getAttribute("href").slice(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            targetElement.scrollIntoView({
                behavior: "smooth",
                block: "start"
            });
        }
    });
});

// Add Download Message for "Soon" Links
const soonLinks = document.querySelectorAll("a[href='']");
soonLinks.forEach(link => {
    link.addEventListener("click", e => {
        e.preventDefault();
        alert("This feature will be available soon!");
    });
});

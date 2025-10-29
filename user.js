auth.onAuthStateChanged(user => {
    if (user) {
      const uid = user.uid;
      db.collection("usuarios").doc(uid).get().then(doc => {
        const data = doc.data();
        document.getElementById("nnid").innerText = data.nnid;
        document.getElementById("mii-img").src = data.mii_url;
      });
    } else {
      window.location.href = "user.html"; // Si no hay login
    }
  });
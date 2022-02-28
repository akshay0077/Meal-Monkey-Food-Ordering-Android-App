package com.akshaykher.mealmonkey.Model;

public class PopularItems {
    private int id,status;
    private String name,img,date;

    public PopularItems(int id, int status, String name, String img, String date) {
        this.id = id;
        this.status = status;
        this.name = name;
        this.img = img;
        this.date = date;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getStatus() {
        return status;
    }

    public void setStatus(int status) {
        this.status = status;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getImg() {
        return img;
    }

    public void setImg(String img) {
        this.img = img;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }
}

package com.akshaykher.mealmonkey.Api;

import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class ApiUtilities {

    //    Base URL From Hosting
    private static final String BASE_URL = "http://192.168.65.165/6th-Sem-Project/SOURCE-CODE/API/api/";
    //    Category Image URL
    public static final String CatImageUrl = "http://192.168.65.165/6th-Sem-Project/SOURCE-CODE/ADMIN/images/category/";
    //    Menu Item Image URL
    public static final String MenuItemImageUrl = "http://192.168.65.165/6th-Sem-Project/SOURCE-CODE/ADMIN/images/menuitem/";
    public static Retrofit retrofit = null;

    public static ApiInterface apiInterface() {
        if (retrofit == null) {

            Gson gson = new GsonBuilder()
                    .setLenient()
                    .create();
            retrofit = new Retrofit.Builder()
                    .baseUrl(BASE_URL)
                    .addConverterFactory(GsonConverterFactory.create(gson))
                    .build();
        }
        return retrofit.create(ApiInterface.class);
    }
}

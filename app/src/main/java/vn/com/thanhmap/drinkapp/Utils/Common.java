package vn.com.thanhmap.drinkapp.Utils;

import vn.com.thanhmap.drinkapp.Retrofit.IDrinkShopAPI;
import vn.com.thanhmap.drinkapp.Retrofit.RetrofitClient;

public class Common {
    private static final String BASE_URL = "http://thanhmap.dev/";

    public static IDrinkShopAPI getAPI(){
        return RetrofitClient.getClient(BASE_URL).create(IDrinkShopAPI.class);
    }
}

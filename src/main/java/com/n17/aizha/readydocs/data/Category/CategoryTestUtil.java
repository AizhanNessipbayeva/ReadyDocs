package com.n17.aizha.readydocs.data.Category;

import android.content.ContentValues;
import android.database.SQLException;
import android.database.sqlite.SQLiteDatabase;

import java.util.ArrayList;
import java.util.List;

/**
 * Created by aizha on 24.07.2017.
 */

public class CategoryTestUtil {
    public static void insertToCategory(SQLiteDatabase db){
        if(db == null){
            return;
        }
        List<ContentValues> list = new ArrayList<ContentValues>();

        ContentValues cv = new ContentValues();
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Image, "taxation_icon");
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Name, "Taxation");
        list.add(cv);

        cv = new ContentValues();
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Image, "energy_station_icon");
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Name, "Energy station");
        list.add(cv);

        cv = new ContentValues();
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Image, "doki_icon");
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Name, "BTI");
        list.add(cv);

        cv = new ContentValues();
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Image, "police_car_icon");
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Name, "Police car");
        list.add(cv);

        cv = new ContentValues();
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Image, "water_station_icon");
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Name, "Water station");
        list.add(cv);

        cv = new ContentValues();
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Image, "embassy_icon");
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Name, "Embassy");
        list.add(cv);

        cv = new ContentValues();
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Image, "home_icon");
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Name, "Home require");
        list.add(cv);

        cv = new ContentValues();
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Image, "marriage_icon");
        cv.put(DocsContract.DocsEntry.COLUMN_Category_Name, "Marriage");
        list.add(cv);


        try{
            db.beginTransaction();
            db.delete(DocsContract.DocsEntry.Category_Table_Name, null, null);
            for(ContentValues c:list){
                db.insert(DocsContract.DocsEntry.Category_Table_Name, null, c);
            }
            db.setTransactionSuccessful();
        }catch (SQLException e){}
        finally {
            db.endTransaction();
        }
    }
}

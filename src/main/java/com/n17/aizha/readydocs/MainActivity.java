package com.n17.aizha.readydocs;

import android.database.Cursor;
import android.database.sqlite.SQLiteDatabase;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.widget.Toast;

import com.n17.aizha.readydocs.data.Category.CategoryTestUtil;
import com.n17.aizha.readydocs.data.Category.DocsContract;
import com.n17.aizha.readydocs.data.Category.DocsDBHelper;

public class MainActivity extends AppCompatActivity {

    private static final String TAG = MainActivity.class.getSimpleName();


    private SelectorCategoryAdapter mAdapter;
    private SQLiteDatabase mDb;
    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        RecyclerView mRecyclerView;

        mRecyclerView = (RecyclerView) this.findViewById(R.id.mainRecyclerView);

        LinearLayoutManager layoutManager = new LinearLayoutManager(this);
        mRecyclerView.setLayoutManager(layoutManager);


        DocsDBHelper dbHelper = new DocsDBHelper(this);

        mDb = dbHelper.getWritableDatabase();

        CategoryTestUtil.insertToCategory(mDb);

        Cursor cursor = getAllCategory()
                ;

        /*String[] colNames = cursor.getColumnNames();
        Log.e("MAIN", String.valueOf(colNames.length));
        for (int i = 0; i < colNames.length; i++)
            Log.e("MAIN", colNames[i]);*/

        mAdapter = new SelectorCategoryAdapter(this, cursor);
        mRecyclerView.setAdapter(mAdapter);
    }

   /* @Override
    public void onListItemClick(int clickedItemIndex) {
        Toast.makeText(this, "You clicked" + clickedItemIndex, Toast.LENGTH_LONG).show();

    }*/

    private Cursor getAllCategory() {
        return mDb.query(DocsContract.DocsEntry.Category_Table_Name,
                null,
                null,
                null,
                null,
                null,
                DocsContract.DocsEntry.COLUMN_Timestamp);
    }
}

package com.example.hysteria;

import android.app.Activity;
import android.content.res.Resources;
import android.content.res.TypedArray;
import android.graphics.drawable.Drawable;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ArrayAdapter;
import android.widget.TextView;

public class CategoryAdapter extends ArrayAdapter<String>{

	Activity context;
	String[] names;
	
	public CategoryAdapter(Activity context, int resource, String[] typeNames) {
		super(context, resource, typeNames);
		
		this.context = context;
		this.names = typeNames;
	}

	@Override
	public View getDropDownView(int position, View convertView, ViewGroup parent) {
		
		return getCustomView(position, convertView, parent);
	}
	
	@Override
	public View getView(int position, View convertView, ViewGroup parent) {
		
		return getCustomView(position, convertView, parent);
	}
	
	public View getCustomView(int position, View convertView, ViewGroup parent)
	{		
		LayoutInflater inflater = context.getLayoutInflater();
		View mySpinner = inflater.inflate(R.layout.row_request_categories, parent, false);
						
		TextView row = (TextView)mySpinner.findViewById(R.id.tvCategory);
		row.setText(names[position]);

		Resources res = context.getResources();
		TypedArray icons = res.obtainTypedArray(R.array.category_icons);
		Drawable icon = icons.getDrawable(position);
		row.setCompoundDrawablesWithIntrinsicBounds(icon, null, null, null);
		
		
		icons.recycle();
		return mySpinner;
	}
	
}

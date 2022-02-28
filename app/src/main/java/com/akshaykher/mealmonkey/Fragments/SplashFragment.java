package com.akshaykher.mealmonkey.Fragments;

import android.os.Bundle;

import androidx.fragment.app.Fragment;
import androidx.fragment.app.FragmentTransaction;

import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.akshaykher.mealmonkey.R;
import com.akshaykher.mealmonkey.databinding.FragmentSplashBinding;


public class SplashFragment extends Fragment {


    public SplashFragment() {
        // Required empty public constructor
    }

    private FragmentSplashBinding binding;

    @Override
    public View onCreateView(LayoutInflater inflater, ViewGroup container,
                             Bundle savedInstanceState) {
        // Inflate the layout for this fragment

        binding = FragmentSplashBinding.inflate(getLayoutInflater());
        binding.btnSplashGetStarted.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                FragmentTransaction fragmentTransaction = getParentFragmentManager().beginTransaction();
                fragmentTransaction.replace(R.id.frMainContainer, new DashboardFragment());
                fragmentTransaction.commit();
            }
        });
        return binding.getRoot();
    }
}
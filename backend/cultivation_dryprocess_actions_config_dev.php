<?php

return [
    [
        "actionName" => "Propagate-test",
        "items" => [
            [
                "inputItemTypeName" => "Seed Packet",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Seedlings",
                "outputCostCenterName" => "Propagation",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Create Mom",
        "items" => [
            [
                "inputItemTypeName" => "Plant Veg",
                "inputCostCenterName" => "Vegetative",
                "outputItemTypeName" => "Plant Mom",
                "outputCostCenterName" => "MotherCare",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Clone",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Plant Mom",
                "outputCostCenterName" => "MotherCare",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Seedlings",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Plant Mom",
                "outputCostCenterName" => "MotherCare",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Tissue",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Plant Mom",
                "outputCostCenterName" => "MotherCare",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Make Clones From Plants",
        "items" => [
            [
                "inputItemTypeName" => "Plant Mom",
                "inputCostCenterName" => "MotherCare",
                "outputItemTypeName" => "Clone",
                "outputCostCenterName" => "Propagation",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => true
                ]
            ],
            [
                "inputItemTypeName" => "Plant Veg",
                "inputCostCenterName" => "Vegetative",
                "outputItemTypeName" => "Clone",
                "outputCostCenterName" => "Propagation",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => true
                ]
            ]
        ]
    ],
    [
        "actionName" => "Make Clones From Branches",
        "items" => [
            [
                "inputItemTypeName" => "Plant Mom",
                "inputCostCenterName" => "MotherCare",
                "outputItemTypeName" => "Clone",
                "outputCostCenterName" => "Propagation",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => true
                ]
            ],
            [
                "inputItemTypeName" => "Plant Veg",
                "inputCostCenterName" => "Vegetative",
                "outputItemTypeName" => "Clone",
                "outputCostCenterName" => "Propagation",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => true
                ]
            ]
        ]
    ],
    [
        "actionName" => "Begin Vegetative",
        "items" => [
            [
                "inputItemTypeName" => "Seedlings",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Plant Veg",
                "outputCostCenterName" => "Vegetative",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Tissue",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Plant Veg",
                "outputCostCenterName" => "Vegetative",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Clone",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Plant Veg",
                "outputCostCenterName" => "Vegetative",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Plant Mom",
                "inputCostCenterName" => "MotherCare",
                "outputItemTypeName" => "Plant Veg",
                "outputCostCenterName" => "Vegetative",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Begin Flowering",
        "items" => [
            [
                "inputItemTypeName" => "Plant Mom",
                "inputCostCenterName" => "MotherCare",
                "outputItemTypeName" => "Plant Flower",
                "outputCostCenterName" => "Flowering",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Plant Veg",
                "inputCostCenterName" => "Vegetative",
                "outputItemTypeName" => "Plant Flower",
                "outputCostCenterName" => "Flowering",
                "config" => [
                    "hasCull" => true,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Harvest From Plants",
        "items" => [
            [
                "inputItemTypeName" => "Plant Flower",
                "inputCostCenterName" => "Flowering",
                "outputItemTypeName" => "HarvestWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => true
                ]
            ]
        ]
    ],
    [
        "actionName" => "Harvest From Branches",
        "items" => [
            [
                "inputItemTypeName" => "Plant Flower",
                "inputCostCenterName" => "Flowering",
                "outputItemTypeName" => "HarvestWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => true
                ]
            ]
        ]
    ],
    [
        "actionName" => "DeStem",
        "items" => [
            [
                "inputItemTypeName" => "HarvestWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "HangWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Wet Debud",
        "items" => [
            [
                "inputItemTypeName" => "HangWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "WetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HangWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HarvestWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "WetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HarvestWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Dry Debud",
        "items" => [
            [
                "inputItemTypeName" => "HarvestWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "DryWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HarvestWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HangWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "DryWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HangWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Freeze",
        "items" => [
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "FzWetWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "FzWetBud",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "FzWetTrim",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "xWetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xFzWetWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Freeze-Dry",
        "items" => [
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "FzDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "FzDryBud",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "FzDryTrim",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Trim",
        "items" => [
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "WetBud",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "WetTrim",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "DryBud",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "DryTrim",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Kief",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "End Dry",
        "items" => [
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "DryWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Make Kief",
        "items" => [
            [
                "inputItemTypeName" => "DryWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Kief",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Kief",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Kief",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Static Sift",
        "items" => [
            [
                "inputItemTypeName" => "Kief",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Kief.Stat",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Begin Cure",
        "items" => [
            [
                "inputItemTypeName" => "DryBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "CureBud",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "CureTrim",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "End Cure",
        "items" => [
            [
                "inputItemTypeName" => "CureBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Bud",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CureBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CureTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Trim",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CureTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Salvage",
        "items" => [
            [
                "inputItemTypeName" => "Finished Good",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => true,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Pass",
        "items" => [
            [
                "inputItemTypeName" => "xWetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "WetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "xDryWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "DryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "xFzWetWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "FzWetWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "xFzDryWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "FzDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Fail",
        "items" => [
            [
                "inputItemTypeName" => "HarvestWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HangWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xWetWt",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CureBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CureTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzWetWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xFzWetWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzWetBud",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xFzWetWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzWetTrim",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xFzWetWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzDryWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xFzDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzDryBud",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xFzDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzDryTrim",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xFzDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Bud",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Trim",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Kief",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "xDryWt",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => null,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => true,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ],
    [
        "actionName" => "Take Lab Sample",
        "items" => [
            [
                "inputItemTypeName" => "Finished Good",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Seed Packet",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Seedlings",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Propagation",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Tissue",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Propagation",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Clone",
                "inputCostCenterName" => "Propagation",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Propagation",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Plant Mom",
                "inputCostCenterName" => "MotherCare",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "MotherCare",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Plant Veg",
                "inputCostCenterName" => "Vegetative",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vegetative",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Plant Flower",
                "inputCostCenterName" => "Flowering",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Flowering",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HarvestWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HangWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "WetTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "xWetWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryWt",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "DryTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CureBud",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CureTrim",
                "inputCostCenterName" => "DryProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "DryProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "xDryWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzWetWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzWetBud",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzWetTrim",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "xFzWetWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzDryWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzDryBud",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "FzDryTrim",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "xFzDryWt",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Bud",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Trim",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Kief",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Kief.Stat",
                "inputCostCenterName" => "Vault",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "Vault",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "BB.Hash",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Rosin",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Hash.Rosin",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "Live.Rosin",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBC.frac",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBC.isol",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBD.dist",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBD.frac",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBD.isol",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBD.rem",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBG.frac",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBG.isol",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBN.frac",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBN.isol",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CBV.frac",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CDT",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "CDT.dist",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HCE.dist",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HCE.rem",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HCE.win",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HCE.win.crc",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HCE.win.dcb",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HCE.win.dcb.crc",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HTE",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "HTE.LR",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "THC.dcb",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "THC.dist",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "THC.frac",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "THC.isol",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "THC.rem",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "THCV.frac",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "THCV.isol",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "THCa.Crystals",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.LR",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.LR.c",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.LR.crc",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.LR.dcb",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.LR.dcb.crc",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.LR.p",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.c",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.crc",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.dcb",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.dcb.crc",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ],
            [
                "inputItemTypeName" => "crude.p",
                "inputCostCenterName" => "LabProcess",
                "outputItemTypeName" => "Lab Sample",
                "outputCostCenterName" => "LabProcess",
                "config" => [
                    "hasCull" => null,
                    "hasWaste" => true,
                    "hasEvaporation" => null,
                    "hasNoResourceBill" => null,
                    "noQuantityAffected" => null
                ]
            ]
        ]
    ]
];
